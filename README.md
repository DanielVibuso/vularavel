# Sobre o projeto

Baseado em Laravel 8 e VueJs, foi feito usando os recursos do laravel de desacoplamento do front com o laravel ui.
Embora utilize o blade para exibir o front, os dados são servidos e consumidos como uma api independente do front e podendo ser consumida por outros clientes incluindo o insomna e o postman no endereço ```0.0.0.0:3000/api/vehicle```
No front foram criados apenas 2 components para ilustrar o uso do single file components e axios para consumir a api.

# Requisitos
Requisitos: docker e docker-compose instalado na máquina

# Instalação

Basta baixar o projeto abrir o terminal dentro do diretório raiz e executar os seguintes comandos:

```docker-compose up -d```<br>
```docker-compose exec myapp php artisan db:seed```

feito isso o projeto estará acessível acessando:<br>
``` 0.0.0.0:3000 ```

OBS: Caso já tenha algum serviço rodando na porta 3000 e 3001 é necessário desligá-los antes de rodar o primeiro comando, ou alterar essas portas no docker-compose.yml deste projeto para portas que estejam disponíveis.
