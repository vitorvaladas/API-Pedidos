# API-Pedidos

- Para rodar este projeto, será necessário ter instalado apenas:
    Composer: https://getcomposer.org/download/
    Laragon: https://laragon.org/download/
    Postman: https://www.postman.com/downloads/

- Assim que instalados, basta colar a pasta 'api-pedidos' deste projeto para a pasta '\laragon\www\'.

- O link para acessar o projeto localmente é 'http://api-pedidos.test/'.

- As requisições via API serão feitas pelo Postman.
    Para clientes, basta colar o link 'http://api-pedidos.test/api/cliente' na barra de pesquisa e passar os parâmetros:
      ID_CLIENTE, NOME, CIDADE, ESTADO, TELEFONE
    Para pedidos, basta colar o link 'http://api-pedidos.test/api/pedidos' na barra de pesquisa e passar os parâmetros: 
      ID_CLIENTE, VALOR_PEDIDO, VALOR_FRETE, DATA_ENTREGA
    
- Atualizando a página 'http://api-pedidos.test/relatorioPedidos', o relatório estará montado, relacionado 'clientes' e 'pedidos' pela coluna 'ID_CLIENTE'.
