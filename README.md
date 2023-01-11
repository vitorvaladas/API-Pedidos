# API-Pedidos

- Para rodar este projeto, será necessário ter instalado apenas:

    1º - Laragon: https://laragon.org/download/
        - Após instalação, clicar em "Iniciar Tudo".
    
    2º - Composer: https://getcomposer.org/download/
        - Durante a instalação, encontrar o arquivo php.exe dentro do C:\laragon\bin\php\...
    
    3º - Postman: https://www.postman.com/downloads/
        - Após instalação, abrir o Postan e clicar em "Skip and go to the app".

- Assim que instalados, basta colar a pasta 'api-pedidos' deste projeto para a pasta '\laragon\www\'.

- O link para acessar o projeto localmente é ' 

- As requisições via API serão feitas pelo Postman.
  - Para clientes, basta colar o link 'http://api-pedidos.test/api/cliente' na barra de pesquisa e passar os parâmetros: 
     ID_CLIENTE, NOME, CIDADE, ESTADO, TELEFONE
    
  - Para pedidos, basta colar o link 'http://api-pedidos.test/api/pedidos' na barra de pesquisa e passar os parâmetros: 
     ID_CLIENTE, VALOR_PEDIDO, VALOR_FRETE, DATA_ENTREGA
    
- Atualizando a página 'http://api-pedidos.test/relatorioPedidos', o relatório estará montado, relacionado 'clientes' e 'pedidos' pela coluna 'ID_CLIENTE'.
