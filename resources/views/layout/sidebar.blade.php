<div class="sidebar-wrapper">

    <div class="sidebar-title">Navigation</div>

    <ul class="sidebar-menu">

        <li>
            <a href="/dashboard" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li>
            <a class="sidebar-link" onclick="toggleSubmenu('hospitalsMenu')">
                <i class="fas fa-hospital"></i>
                <span class="menu-text">Hospitals</span>
                <i class="fas fa-chevron-down ms-auto"></i>
            </a>

            <div id="hospitalsMenu" class="submenu">
                <a href="/hospitals">🏥 List Hospitals</a>
                <a href="/hospital/add">➕ Add Hospital</a>
                <a href="/hospital/edit">✏ Edit Hospital</a>
                <a href="/hospital/delete">🗑 Delete Hospital</a>
            </div>
        </li>

        <li>
            <a class="sidebar-link" onclick="toggleSubmenu('doctorsMenu')">
                <i class="fas fa-user-md"></i>
                <span class="menu-text">Doctors</span>
                <i class="fas fa-chevron-down ms-auto"></i>
            </a>

            <div id="doctorsMenu" class="submenu">
                <a href="/doctors">👨‍⚕️ Doctors List</a>
                <a href="/doctors/add">➕ Add Doctor</a>
                <a href="/doctors/edit">✏ Edit Doctor</a>
                <a href="/doctors/delete">🗑 Delete Doctor</a>
            </div>
        </li>

        <li><a href="/blood-donors" class="sidebar-link"><i class="fas fa-tint"></i> <span class="menu-text">Blood Donors</span></a></li>

        <li><a href="/labs" class="sidebar-link"><i class="fas fa-vials"></i> <span class="menu-text">Labs & Clinics</span></a></li>

        <li><a href="/pharmacy" class="sidebar-link"><i class="fas fa-pills"></i> <span class="menu-text">Pharmacy</span></a></li>

        <li><a href="/first-aid" class="sidebar-link"><i class="fas fa-briefcase-medical"></i> <span class="menu-text">First Aid Guide</span></a></li>

        <li><a href="/emergency-numbers" class="sidebar-link"><i class="fas fa-phone-alt"></i> <span class="menu-text">Emergency Numbers</span></a></li>

    </ul>

</div>

<script>
function toggleSubmenu(id) {
    document.getElementById(id).classList.toggle('show');
}
</script>
