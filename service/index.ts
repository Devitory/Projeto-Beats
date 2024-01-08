import { Hono } from 'hono';
import { cors } from 'hono/cors';
import { jwt, sign, verify, decode } from 'hono/jwt';



const app = new Hono();

app.post('/auth/signup', (conext) => {
  const body = JSON.stringify(conext.env);

  return new Response(body, { status: 200 });
});


export default app;
