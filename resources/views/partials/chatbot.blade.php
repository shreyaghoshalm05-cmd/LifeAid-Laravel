<!-- CHATBOT -->
<div id="chatbot-container">

    <!-- Floating Button -->
    <div id="chatbot-toggle">
    <div class="ai-logo">
        <span class="pulse-ring"></span>
        <span class="ai-core">+</span>
    </div>
    </div>


    <!-- Chat Box -->
    <div id="chatbot-box">

        <!-- Header -->
        <div class="chat-header">
            <span>🩺 LifeAid AI Assistant</span>
            <button onclick="toggleChatbot()">✖</button>
        </div>

        <!-- Messages -->
        <div id="chat-body">
            <div class="bot welcome">
                👋 Hello! I’m your LifeAid Assistant.<br>
                Ask me about:
                <ul>
                    <li>🏥 Hospitals</li>
                    <li>👨‍⚕️ Doctors</li>
                    <li>🩸 Blood Donors</li>
                    <li>🧪 Labs</li>
                    <li>💊 Pharmacy</li>
                    <li>🚨 Emergency</li>
                </ul>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <button onclick="quickMsg('hospitals')">🏥 Hospitals</button>
            <button onclick="quickMsg('doctors')">👨‍⚕️ Doctors</button>
            <button onclick="quickMsg('blood')">🩸 Blood</button>
            <button onclick="quickMsg('emergency')">🚨 Emergency</button>
        </div>

        <!-- Input -->
        <div class="chat-input">
            <input type="text" id="chat-input" placeholder="Type your message..." />
            <button onclick="sendMsg()">➤</button>
        </div>

    </div>
</div>
