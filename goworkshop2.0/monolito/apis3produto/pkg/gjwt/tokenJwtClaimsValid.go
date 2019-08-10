package gjwt

import (
	jwt "github.com/dgrijalva/jwt-go"
	"github.com/jeffotoni/goworkshop2.0/monolito/apis3produto/models/jwt"
	"net/http"
)

// validate and check the token
func tokenJwtClaimsValid(w http.ResponseWriter, r *http.Request) bool {
	token := GetSplitTokenBasic(w, r)
	if token != "" {
		// start
		parsedToken, err := jwt.ParseWithClaims(token, &models.Claim{}, func(*jwt.Token) (interface{}, error) {
			return PublicKey, nil
		})

		if err != nil || !parsedToken.Valid {
			return false
		}

		_, ok := parsedToken.Claims.(*models.Claim)
		return ok
	} else {
		return false
	}
}
