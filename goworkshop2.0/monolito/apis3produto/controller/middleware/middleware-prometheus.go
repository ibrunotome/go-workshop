// Go Api server
// @jeffotoni

package middleware

import (
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/pkg/util"
	"github.com/prometheus/client_golang/prometheus"
	"github.com/prometheus/client_golang/prometheus/promhttp"
	"net/http"
)

// can only register only once
var inFlightGauge = prometheus.NewGauge(prometheus.GaugeOpts{
	Name: "apis3produto_http_in_flight_requests",
	Help: "A gauge of requests currently being served by the wrapped handler.",
})

var counter = prometheus.NewCounterVec(
	prometheus.CounterOpts{
		Name: "apis3produto_http_api_requests_total",
		Help: "A counter for requests to the wrapped handler.",
	},
	[]string{"code", "method"},
)

// duration is partitioned by the HTTP method and handler. It uses custom
// buckets based on the expected request duration.
var duration = prometheus.NewHistogramVec(
	prometheus.HistogramOpts{
		Name:    "apis3produto_http_request_duration_seconds",
		Help:    "A histogram of latencies for requests.",
		Buckets: []float64{0.005, 0.01, 0.025, 0.05, .1, .25, .5, 1, 2.5, 5, 10},
	},
	[]string{"code", "handler", "method"},
)

// responseSize has no labels, making it a zero-dimensional
// ObserverVec.
var responseSize = prometheus.NewHistogramVec(
	prometheus.HistogramOpts{
		Name:    "apis3produto_http_response_size_bytes",
		Help:    "A histogram of response sizes for requests.",
		Buckets: []float64{1, 10, 50, 100, 200, 500, 900, 1500},
	},
	[]string{"code", "handler", "method"},
)

// can only register only once
func init() {
	prometheus.MustRegister(inFlightGauge, counter, duration, responseSize)
}

func MetricsPrometheus(endpoint string) Adapter {
	return func(h http.Handler) http.Handler {
		return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {

			///////////////////////////////////////
			///// exec return
			headerChain := promhttp.InstrumentHandlerInFlight(inFlightGauge,
				promhttp.InstrumentHandlerDuration(duration.MustCurryWith(prometheus.Labels{"handler": endpoint}),
					promhttp.InstrumentHandlerCounter(counter,
						promhttp.InstrumentHandlerResponseSize(responseSize.MustCurryWith(prometheus.Labels{"handler": endpoint}), h),
					),
				),
			)
			headerChain.ServeHTTP(w, r)
		})
	}
}

func MetricsPrometheusPath(endpoint string, h http.Handler) http.Handler {
	///////////////////////////////////////
	///// exec return
	return promhttp.InstrumentHandlerInFlight(inFlightGauge,
		promhttp.InstrumentHandlerDuration(duration.MustCurryWith(prometheus.Labels{"handler": endpoint}),
			promhttp.InstrumentHandlerCounter(counter,
				promhttp.InstrumentHandlerResponseSize(responseSize.MustCurryWith(prometheus.Labels{"handler": endpoint}), h),
			),
		),
	)
}

func MetricsPrometheusDinamic() Adapter {

	return func(h http.Handler) http.Handler {
		return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
			var endpoint string
			if r.URL.Path != "/" {
				endpoint, _ = util.EndpointRegex(r)
			}

			///////////////////////////////////////
			///// exec return
			headerChain := promhttp.InstrumentHandlerInFlight(inFlightGauge,
				promhttp.InstrumentHandlerDuration(duration.MustCurryWith(prometheus.Labels{"handler": endpoint}),
					promhttp.InstrumentHandlerCounter(counter,
						promhttp.InstrumentHandlerResponseSize(responseSize.MustCurryWith(prometheus.Labels{"handler": endpoint}), h),
					),
				),
			)
			headerChain.ServeHTTP(w, r)
		})
	}
}
