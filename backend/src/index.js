/**
 * @param {import('./index').Request} request
 * @param {unknown} env
 * @param {import('./index').ExecutionContext} context
 */
async function fetch(request, env, context) {
  const headers = new Headers();
  headers.set('content-type', 'application/json;charset=UTF-8')

  const data = {
    request,
    env,
    context
  };

  const body = JSON.stringify(data, null, 2);
  const status = 200;
  return new Response(body, { status, headers });
}

export default { fetch };
