const loginBtn = document.querySelector('#loginBtn');
    const login = document.querySelector('#login');
    const password = document.querySelector('#password');
    const form = document.querySelector('.form-signin');
    const ajaxHeaders = {
        'credentials': 'same-origin',
        'X-Requested-With': 'XMLHttpRequest',
        'cache': 'no-cache',
        'Cache-Control': 'no-store, no-transform, max-age=0, private',
        'Content-Type': 'application/json'
    };

    const markLoginError = () => {
        form.classList.add('error');
        setTimeout(() => {
            form.classList.remove('error');
        }, 1000);
    };

    loginBtn.addEventListener('click', (e) => {
        if (login.value.length === 0 || password.value.length === 0) {
            markLoginError();
        } else {
            // argon2.hash({
            //     pass: password.value,
            //     salt: '2$bEtkTXlEMXJiOTd4R210MA$AARP9',
            //     time: 4,
            //     mem: 1024,
            //     hashLen: 64,
            //     parallelism: 8,
            //     type: argon2.ArgonType.Argon2id
            // }).then(hash => {
                // fetch('cnx.php', {
                //     headers: ajaxHeaders,
                //     method: 'post',
                //     redirect: 'follow',
                //     body: JSON.stringify({
                //         "type": "cnx",
                //         "action": "connect",
                //         "username": btoa(login.value),
                //         "hash": btoa(hash.encoded)
                //     })
                fetch('/', {
                    headers: ajaxHeaders,
                    method: 'post',
                    redirect: 'follow',
                    body: JSON.stringify({
                        "type": "cnx",
                        "action": "connect",
                        "username": window.btoa(login.value),
                        "hash": window.btoa(password.value)
                    })
                }).then((response) => {
                    return response.json();
                }).then((cnx) => {
                    if (cnx.status === 401 && cnx.action === 'cnx' && cnx.connected === false) {
                        markLoginError();
                    } else if (cnx.status === 200 && cnx.action === 'cnx' && cnx.connected === true) {
                        if (loginBtn.dataset.redirect.length) {
                            url = "/?annonce=" + loginBtn.dataset.redirect;
                        } else {
                            url = "/"
                        }
                        d.location.href = url;
                    }
                });
            }
            });
        
