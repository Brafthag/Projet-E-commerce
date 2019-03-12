

const url = 'http//127.0.0.1:3000'

function fetchUserList () {
    const headers = {
        'Accept' : 'application/json'
    }
    return fetch(`${url}/user`, { headers }).then(res => res.json())
    
}


function updateUserListNode (){
    const node = document.getElementById('userList')
    fetchUserList().then(data => {
        for(const user of data.rows) {
            const li = document.createElement('li')
            li.innerText = user.name +'(' + user.emai + ')'
            node.appendChild(li)
        }

    })
}

updateUserListNode()