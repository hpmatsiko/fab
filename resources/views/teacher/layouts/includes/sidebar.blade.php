<style type="text/css">
    .nav-link.active {
        color: #198754 !important;
    }
</style>
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('admin') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0" style="color:#000066; font-weight: 1000;">
                <img class="rounded-circle" style="height: 15vh; width: 15vh; margin-bottom: 5vh; margin-top: 1vh;" src="/img/logo.png" alt="">
            </h2>
        </a>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin') }}" class="nav-item nav-link {{ Request::routeIs('admin') ? 'active' : '' }}" id="dsh" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                <i class="fa fa-tachometer-alt me-2"></i>
                <span id="dash">Dashboard</span>
            </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('addBookCat', 'CatL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="ibt" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-tags me-2"></i>
                    <span id="ibn">Category</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('addBookCat') }}" class="dropdown-item">Add Category</a>
                    <a href="{{ route('CatL') }}" class="dropdown-item">Category List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseCat', 'SubCatL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="subb" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-tag me-2"></i>
                    <span id="sub">Sub-category</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseCat') }}" class="dropdown-item">Add Sub-category</a>
                    <a href="{{ route('SubCatL') }}" class="dropdown-item">Sub-category List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseSubCat', 'BookL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="book" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-book me-2"></i>
                    <span id="boo">Books</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseSubCat') }}" class="dropdown-item">Add Book</a>
                    <a href="{{ route('BookL') }}" class="dropdown-item">Book List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseBook', 'ChooseBookL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="chapter" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-book-open me-2"></i>
                    <span id="chap">Chapters</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBook') }}" class="dropdown-item">Add Chapter</a>
                    <a href="{{ route('ChooseBookL') }}" class="dropdown-item">Chapters List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseBookChap', 'ChooseBookLN') ? 'active' : '' }}" data-bs-toggle="dropdown" id="note" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-file-alt me-2"></i>
                    <span id="not">Notes</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBookChap') }}" class="dropdown-item">Add Note</a>
                    <a href="{{ route('ChooseBookLN') }}" class="dropdown-item">Notes List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseBookEx', 'ChooseBookLE') ? 'active' : '' }}" data-bs-toggle="dropdown" id="exer" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-dumbbell me-2"></i>
                    <span id="ex">Exercises</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBookEx') }}" class="dropdown-item">Add Exercise</a>
                    <a href="{{ route('ChooseBookLE') }}" class="dropdown-item">Exercise list</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseEx', 'ChooseBookLQ') ? 'active' : '' }}" data-bs-toggle="dropdown" id="ques" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-question me-2"></i>
                    <span id="que">Questions</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseBookQ') }}" class="dropdown-item">Add Question</a>
                    <a href="{{ route('ChooseBookLQ') }}" class="dropdown-item">Questions List</a>
                </div>

            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseEx', 'ChooseBookLQ') ? 'active' : '' }}" data-bs-toggle="dropdown" id="ques" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-user me-2"></i>
                    <span id="que">Users</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('register') }}" class="dropdown-item">Add User</a>
                    <a href="UserL" class="dropdown-item">Users List</a>
                </div>

            </div>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseEx', 'ChooseBookLQ') ? 'active' : '' }}" data-bs-toggle="dropdown" id="conte" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-home me-2"></i>
                    <span id="cont">Home Content</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('addContent') }}" class="dropdown-item">Add Content</a>
                    <a href="{{ route('AllContent') }}" class="dropdown-item">All Content</a>
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


