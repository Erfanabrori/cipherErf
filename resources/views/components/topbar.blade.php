<div class="topbar-minimal">
    <div class="topbar-content">
        <div class="web-name">
            <i class="fa-solid fa-key-skeleton"></i>
            <span>Kriptografi Erf</span>
        </div>

        <div class="user-info">
            <div class="user-avatar">
                @php
                    $userName = session('user_name', session('user'));
                    $initials = strtoupper(substr($userName, 0, 1));
                @endphp
                <span class="avatar-initial">{{ $initials }}</span>
            </div>
            <span class="user-name">{{ $userName }}</span>
        </div>
    </div>
</div>

<style>
.topbar-minimal {
    background: #111316;
    color: white;
    border-radius: 12px;
    padding: 16px 24px;
    margin-bottom: 24px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.topbar-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.web-name {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 18px;
    font-weight: 600;
}

.web-name i {
    color: #38bdf8;
    font-size: 20px;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.user-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 14px;
    color: white;
}

.user-name {
    font-size: 14px;
    color: #e2e8f0;
}

@media (max-width: 640px) {
    .topbar-content {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }

    .web-name {
        font-size: 16px;
    }

    .user-info {
        gap: 8px;
    }
}
</style>