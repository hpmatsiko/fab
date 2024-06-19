<style type="text/css">
    .nav-link.active {
        color: #198754 !important;
    }
</style>
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('teacher') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0" style="color:#000066; font-weight: 1000;">
                <img class="rounded-circle" style="height: 15vh; width: 15vh; margin-bottom: 5vh; margin-top: 1vh;" src="/img/logo.png" alt="">
            </h2>
        </a>
        <div class="navbar-nav w-100">
            <a href="{{ route('teacher') }}" class="nav-item nav-link {{ Request::routeIs('teacher') ? 'active' : '' }}" id="dsh" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                <i class="fa fa-tachometer-alt me-2"></i>
                <span id="dash">{{ __('messages.dashboard') }}</span>
            </a>

            <a href="{{ route('MyCourses') }}" class="nav-item nav-link {{ Request::routeIs('teacher') ? 'active' : '' }}" id="dsh" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                <i class="fa fa-tachometer-alt me-2"></i>
                <span id="dash">{{ __('messages.my_courses') }}</span>
            </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseBook', 'ChooseBookL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="chapter" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-book-open me-2"></i>
                    <span id="chap">{{ __('messagesproduct') }}</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBook') }}" class="dropdown-item">{{ __('messages.add_chapter') }}</a>
                    <a href="{{ route('ChooseBookL') }}" class="dropdown-item">{{ __('messages.chapter_list') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseBookChap', 'ChooseBookLN') ? 'active' : '' }}" data-bs-toggle="dropdown" id="note" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-file-alt me-2"></i>
                    <span id="not">{{ __('messages.notes') }}</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBookChap') }}" class="dropdown-item">{{ __('messages.add_note') }}</a>
                    <a href="{{ route('ChooseBookLN') }}" class="dropdown-item">{{ __('messages.notes_list') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseBookEx', 'ChooseBookLE') ? 'active' : '' }}" data-bs-toggle="dropdown" id="exer" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-dumbbell me-2"></i>
                    <span id="ex">{{ __('messages.exercises') }}</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBookEx') }}" class="dropdown-item">{{ __('messages.add_exercise') }}</a>
                    <a href="{{ route('ChooseBookLE') }}" class="dropdown-item">{{ __('messages.exercises_list') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseEx', 'ChooseBookLQ') ? 'active' : '' }}" data-bs-toggle="dropdown" id="ques" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-question me-2"></i>
                    <span id="que">{{ __('messages.questions') }}</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBookQ') }}" class="dropdown-item">{{ __('messages.add_question') }}</a>
                    <a href="{{ route('ChooseBookLQ') }}" class="dropdown-item">{{ __('messages.question_list') }}</a>
                </div>

            </div>

            


        </div>
    </nav>
</div>
<!-- Sidebar End -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove 'active' class from all links
                navLinks.forEach(nav => nav.classList.remove('active'));

                // Add 'active' class to the clicked link
                this.classList.add('active');
            });
        });
    });
</script>


