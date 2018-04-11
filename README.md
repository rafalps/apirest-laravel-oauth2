# apirest-laravel-oauth2
teste

# Comandos
- composer update
- php artisan migrate

# Modificar arquivo:
/.env
-> configurar database

# Iniciar serviço
php artisan serve

# POSTMAN

  1 - Método post
  
  2 - url: "http://localhost:8000/oauth/token"
  
  3 - preencher no "Body/x-www-form-urlencoded":
  [
  {"key":"client_id",     "value":"2","description":""},
  {"key":"client_secret", "value":"9d3Q7lDi4rkIi58fnQTElsH71ojaAmczDm41zCSu"},
  {"key":"grant_type",    "value":"password"},
  {"key":"username",      "value":"teste@teste.com"},
  {"key":"password",      "value":"testte","description":""},
  {"key":"scope",         "value":"*"}
  ]
  
  4 - preencher no Headers:
  [
  {"key":"Content-Type",    "value":"application/x-www-form-urlencoded"},
  {"key":"Accept",          "value":"application/json"}
  ]
  
  5 - Pegar valor retornado no campo: access_token
  
  6 - fazer requisição na url: "http://localhost:8000/api/tasks"
  
  7 - preencher Headers:
  [
  {"key":"Content-Type",    "value":"application/json"},
  {"key":"Accept",          "value":"application/json"},
  {"key":"Authorization",   "value":"Bearer     ACCESS-TOKEN    ":""}
  ]


