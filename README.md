Yan Martins Lourenço Fraga




pesquisas na API:
a intenção a principio seria, dar um GET direto e retornar todos os arquivos e suas linhas, e caso pesquisassem o arquivo especifico (id, nome ou data) retornaria ele e seus dados, e se pesquisassem um dado especifico retornaria o do ultimo arquivo, mas acredito que pra manter algo mais organizado e intuitivo, principalmente pra entregar com o front se fosse o caso, optei por deixar tudo em rotas diferentes.


<h1> Yan Martins Lourenço Fraga</h1> 
<p>yan@martinscoders.com</p>
<h3>Deselvolvedor fullStack Jr.</h3>
<hr>

<h4>Metodologia de desenvolvimento aplicada: 'Scrum'</h4>
<p>Técnica basiada em Scrum, mas voltada para implementação individual.</p>
<hr>
<br>

<b>$-VISÃO DO PROJETO</b>
<h1>O Desafio</h1>

<p> A API precisa ter no mínimo 3 endpoints, com as seguintes funcionalidades: </p>
<ul>
    <li>Upload de arquivo</li>
    <li>Histórico de upload de arquivo</li>
    <li>Buscar conteúdo do arquivo</li>
</ul>

<h3>As Regras de négocio:</h3>

<ul>
    <li> 
        <b>Upload de Arquivo:</b>
        <ol>-Deve ser possível enviar arquivos no formato Excel e CSV</ol>
        <ol>-Não é permitido enviar o mesmo arquivo 2x</ol>
    </li>
    <li> 
        <b>Histórico de upload de arquivo:</b>
        <ol>-Deve ser possível buscar um envio especifico por nome do arquivo ou data referência</ol>
    </li>
    <li> 
        <b>Buscar conteúdo do arquivo:</b>
        <ol>-Neste endpoint é opcional o envio de parâmetros mas deve ser possível enviar no mínimo 2 informações para busca, que seriam os campos <b>"TckrSymb" e "RptDt"</b>.</ol>
        <ol>-Se não enviar nenhum parâmetro o resultado deve ser apresentado páginado.</ol>
        <ol>
        -O retorno esperado deve conter no mínimo essas informações: <br>
            {                                                       <br>
                 "RptDt": "2024-08-22",                             <br>
                "TckrSymb": "AMZO34",                               <br>
                "MktNm": "EQUITY-CASH",                             <br>
                "SctyCtgyNm": "BDR",                                <br>
                "ISIN": "BRAMZOBDR002",                             <br>
                "CrpnNm": "AMAZON.COM, INC"                         <br>
            }                             
        </ol>
    </li>
</ul>

<hr>
<br>
<b>$-BACKLOG</b>
<h3>Solução:</h3>
<h5>"Quebrar o problema em problemas menores."</h5>
<h4>1° problema: montar a API</h4>
<ol> 
    <li>
        <b>PLANEJAMENTO</b> 
        <ul>
            <li>Recursos da API: quais entidades você vai expor (users, products, orders, etc.)</li>
            <li>Endpoints: quais rotas a API terá (GET /users, POST /products)</li>
            <li>Autenticação e autorização: JWT, Sanctum ou Passport</li>
            <li>Formato de resposta: JSON padronizado com status, message, data</li>
        </ul>
    </li>
</ol>
