async function fetch() {
  const data = { message: 'It works' };

  const body = JSON.stringify(data, null, 2);

  const status = 200;

  const headers = new Headers();

  headers.set('content-type', 'application/json;charset=UTF-8')

  return new Response(body, { status, headers });
}

export default { fetch }
