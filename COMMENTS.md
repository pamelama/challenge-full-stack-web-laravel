Atenção: Backend e Frontend podem ser encontrados em seus respectivos branches.

Para executar as migrations e popular o banco de dados utilize:

```
php artisan migrate --seed
```

A API pode ser executada em ambiente de desenvolvimento com:

```
php artisan serve
```

## Backend com Laravel

### Rotas e Controller

Tanto nas rotas da aplicação quanto no Controller utilizei o padrão RESTful e a convenção de nomeação de rotas do Laravel.

### Model

Na camada de modelo da aplicação optei pelo uso do recurso de soft deletion que faz com que dados sejam marcados como deletados ao invés de serem removidos de fato do banco de dados. Essa prática impede que os usuários da aplicação tenham acesso as informações que deveriam ser removidas e preserva a integridade do banco de dados.

### Validação

Extendi o recurso de FormRequest do Laravel e criei uma validação personalizada para os dados, informando a obrigatoriedade do preenchimento de todos os campos, os tipos dos campos numérico e a quantidade de caractéres (6 para o RA e 11 para o CPF, ambos com apenas números), e o valor único do campo RA.

#### Banco de dados, Migrations, Factories e Seeders

Utilizei uma Migration para a tabela students onde são armazenados os dados do aluno. Para que os dados da aplicação possam ser manipulados e testados criei uma Factory e um Seeder que alimenta o a tabela de alunos com dados fictícios em português.

## Bibliotecas de terceiros

Não foi utilizada nenhuma outra biblioteca de terceiros.

## Requisitos obrigatórios não-entregues

Frontend com Vuetify. Possuo experiência com React e frontend em geral, mas esse foi meu primeiro contato com Vuetify e não consegui finalizar o frontend da aplicação antes do prazo de entrega.
