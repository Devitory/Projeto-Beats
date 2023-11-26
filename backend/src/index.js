import express from 'express';

const app = express();

app.all('/', function (request, response) {
  response.send({
    message: 'It works! With express!',
    ...request.body,
  });
});

app.listen(3000);
