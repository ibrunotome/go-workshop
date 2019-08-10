# tart by building the application.
# Build em apis3produto com distroless
FROM golang:1.12.7 as builder

WORKDIR /go/src/apis3produto
ENV GO111MODULE=on
COPY . .
#RUN go install -v ./...
RUN GOOS=linux go  build -ldflags="-s -w" -o apis3produto main.go
RUN cp apis3produto /go/bin/apis3produto
#RUN ls -lh

# Now copy it into our base image.
FROM gcr.io/distroless/base
COPY --from=builder /go/bin/apis3produto /
CMD ["/apis3produto"]