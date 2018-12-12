    <li class="nav-item">
        <a class="nav-link" href="{{ route('diet.index') }}">
            <i class="fas fa-list-ol"></i>
            Рационы
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dish.index') }}">
            <i class="fas fa-utensils"></i>
            Блюда
        </a>
    </li>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Информация</span>
    </h6>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('feedback.index') }}">
            <i class="fas fa-utensils"></i>
            Обратная связь({{\App\Models\Feedback::count()}})
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="far fa-credit-card"></i>
            Заказы ({{\App\Models\Order::count()}})
        </a>
    </li>