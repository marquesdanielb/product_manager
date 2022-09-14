# Instruções
Se você chegou até aqui provavelmente deve saber usar o git. Então antes de continuar vamos fazer algumas considerações:

- Para conseguir testar o sistema, a sua versão do php deverá ser superior a 7.

- Você deverá habilitar a extensão PDO no seu php.ini.

# Banco de dados e configuração de conexão
O arquivo [Config.php] se encontra no diretório **source/** e é nele que você usará suas configurações de ambiente como a permissão do seu username no banco de dados. Mas calma, como criar o banco de dados?

- Vá até a sessão de importar arquivos [.sql] no seu SGDB de preferência.

- Procure pela função de importar arquivos [.sql].
nota.: Eu uso o phpmyadmin, se for o seu caso, você pode importar procurando pelo diretório do arquivo que fica em: **lampp/htdocs/gerenciador_produtos**.

- Procure dentro do diretório **gerenciador_produtos/** pelo arquivo [products.sql].

- Após importar o arquivo, lembre-se de dar permissão ao usuário que você irá cadastrar no seu banco.

[Config.php]

- Já no arquivo Config.php 

- A variável global ROOT irá conter a url principal da aplicação.

- A variável global SITE irá conter o título da aplicação.

- Você deverá inserir, na linha 12, o username e o password que foi cadastrado no seu banco.

- Navegue até seu diretório no terminar e digite o comendo "composer instal".

- Acesse o endereço cadastrado na variável ROOT para utilizar a aplicação.

# Bibliotecas usadas
Para a abstração do banco de dados usei a biblioteca "coffeecode/datalayer". Os motivos pelos quais estou usando ela são: facilidade de configuração e a abstração do CRUD.

Quanto as rotas eu usei a biblioteca coffeecode/router que também traz uma abstração quanto as rotas. Os motivos pelos quais estou usando ela são: A Class Router já vem com todos os verbos RESTful.

Para a camada de visão eu decidi usar a biblioteca league/plates por estar mais acostumado a trabalhar com ela.

