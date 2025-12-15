<script>
function showSection(id) {
    // NOT USED (we moved to separate pages)
}

function triggerEmergency() {
    if (confirm("This will call emergency services. Are you sure?")) {
        alert("Emergency services notified.");
    }
}

// Chatbot logic
function toggleChatbot() {
    const window = document.getElementById("chatbotWindow");
    window.style.display = window.style.display === "flex" ? "none" : "flex";
}

function sendMessage() {
    const input = document.getElementById("chatbotInput");
    const msg = input.value.trim();
    if (!msg) return;

    const msgBox = document.getElementById("chatbotMessages");

    let userMsg = document.createElement("div");
    userMsg.className = "message user-message";
    userMsg.textContent = msg;
    msgBox.appendChild(userMsg);

    input.value = "";

    setTimeout(() => {
        let botMsg = document.createElement("div");
        botMsg.className = "message bot-message";

        if (msg.includes("hospital")) {
            botMsg.textContent = "Check the Hospitals section.";
        } else if (msg.includes("doctor")) {
            botMsg.textContent = "Visit the Doctors Directory.";
        } else {
            botMsg.textContent = "I am here to help!";
        }

        msgBox.appendChild(botMsg);
    }, 700);
}


document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.getElementById('chatbot-toggle');
    const box    = document.getElementById('chatbot-box');
    const close  = document.getElementById('chatbot-close');
    const send   = document.getElementById('chat-send');
    const input  = document.getElementById('chat-input');
    const body   = document.getElementById('chat-body');

    if (!toggle || !box) {
        console.error('Chatbot elements missing');
        return;
    }

    toggle.onclick = () => box.style.display = 'flex';
    close.onclick  = () => box.style.display = 'none';

    send.onclick = sendMsg;
    input.addEventListener('keypress', e => {
        if (e.key === 'Enter') sendMsg();
    });

    function sendMsg() {
        let msg = input.value.trim();
        if (!msg) return;

        addMsg('user', msg);
        input.value = '';

        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ message: msg })
        })
        .then(res => res.json())
        .then(data => {
            let reply = data.text;
            if (data.link) {
                reply += `<br><a href="${data.link}" style="color:#60a5fa">👉 Open</a>`;
            }
            addMsg('bot', reply);
        })
        .catch(() => addMsg('bot','⚠️ Server error'));
    }

    function addMsg(type, text) {
        let chat = document.getElementById('chat-body');
        let div = document.createElement('div');
        div.className = type;
        div.innerHTML = text;

        if (text.includes('URGENT') || text.includes('🚨')) {
            div.style.color = '#f87171';
            div.style.fontWeight = 'bold';
        }

        chat.appendChild(div);
        chat.scrollTop = chat.scrollHeight;
    }



});



function toggleChatbot() {
    let box = document.getElementById('chatbot-box');
    box.style.display = box.style.display === 'flex' ? 'none' : 'flex';
}

document.getElementById('chatbot-toggle').onclick = toggleChatbot;

function quickMsg(text) {
    document.getElementById('chat-input').value = text;
    sendMsg();
}

function sendMsg() {
    let input = document.getElementById('chat-input');
    let msg = input.value.trim();
    if (!msg) return;

    addMsg('user', msg);
    input.value = '';

    let typing = document.createElement('div');
    typing.className = 'typing';
    typing.innerText = 'AI is typing...';
    document.getElementById('chat-body').appendChild(typing);

    fetch('/chatbot', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message: msg })
    })
    .then(res => res.json())
    .then(data => {
        typing.remove();
        let reply = data.text;
        if (data.link) {
            reply += `<br><a href="${data.link}" style="color:#60a5fa">👉 Open</a>`;
        }
        addMsg('bot', reply);
    });
}

function addMsg(type, text) {
    let chat = document.getElementById('chat-body');
    let div = document.createElement('div');
    div.className = type;
    div.innerHTML = text;
    chat.appendChild(div);
    chat.scrollTop = chat.scrollHeight;
}


</script>
