# Makefile

.EXPORT_ALL_VARIABLES:	

GO111MODULE=on

beta:
	@echo "\033[0;33m################ go run #####################\033[0m"
	@rm -f go.*
	go mod init github.com/jeffotoni/goworkshop2.0/monolito/apis3produto
	go run main.go
	@echo "\033[0;32mUpdated\033[0m \033[0;33m[ok]\033[0m \n"

deploy:
	@echo "########## Compilando nossa API ... "
	go build -ldflags="-s -w" -o apis3produto main.go
	sleep 1
	@echo "enviando para o servidorbuid completo..."
	@echo "buid completo..."
	@echo "fim"

update:
	@echo "########## Compilando nossa API ... "
	@rm -f go.*
	go mod init github.com/jeffotoni/goworkshop2.0/monolito/apis3produto
	go build -ldflags="-s -w" -o apis3produto main.go
	sleep 1
	@echo "atualizado sucesso."
	@echo "buid completo..."
	@echo "fim"