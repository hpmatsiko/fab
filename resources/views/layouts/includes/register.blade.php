{{-- <!-- Your form HTML -->
@if ($errors->any())
    <div class="alert alert-danger" style="z-index: 200005;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="center modal-box">
 <div class="cr"><i class="fa-solid fa-xmark"></i></div>
 <div class="form_container">
  <form name="form" id="register" action="{{ url('/register') }}" method="post">
    <div>
      <div class="form_wrap form_grp">
        <div class="form_item">
          <label>First Name</label>
          <input type="text" name="fname" value="">

        </div>
        <div class="form_item">
          <label>Last Name</label>
          <input type="text" name="lname" value="">

        </div>
      </div>
      <div class="form_wrap">
        <div class="form_item">
          <label>Email Address</label>
          <input type="text" name="email" value="">

        </div>
      </div>
      <div class="form_wrap form_grp">
        <div class="form_item">
          <label>Password</label>
          <input type="password" name="password">

        </div>
        <div class="form_item">
          <label>Confirm Password</label>
          <input type="password" name="confpassword">

        </div>
      </div>
    </div>
    <div>
      <div class="form_wrap">
        <div class="form_item">
          <label>Gender</label>
          <select name="gender">
            <option>Male</option>
            <option>Famale</option>
            <option>others</option>
          </select>
        </div>
      </div>
      <div class="form_wrap">
        <div class="form_item">
          <label>Phone</label>
          <input type="text" name="phone" value="">
        </div>
      </div>
      <div class="btn">
        <input type="submit" value="Signup">
        <p style="padding-top:2vh;">Already have account <span style="color: #06BBCC;">Login</span></p>
      </div>
    </div>
  </form>
</div>
</div>
--}}
<!-- Your form HTML -->

<div class="center modal-box" style="z-index: 1000089;">
 <div class="cr"><i class="fa-solid fa-xmark"></i></div>
 <div class="form_container">

  <form  method="POST" action="{{ route('register') }}">
    @csrf



    <div>


      <!-- Email Address -->
      <div class="form_wrap form_grp">
        <div class="form_item">

          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
          <x-input-error :messages="$errors->get('email')" class="mt-2"  />
          </div>

          <div class="form_item">

            <input id="phone" type="text" name="phone" value="{{ old('phone_number') }}" required autofocus placeholder="Phone Number">
          </div>

        </div>
        <div class="form_wrap form_grp">
          <!-- Password -->
          <div class="form_item">


            <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="new-password" placeholder="Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="form_item">


              <x-text-input id="password_confirmation" class="block mt-1 w-full"
              type="password"
              name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />

              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
            </div>

          </div>
          <div>
            <div class="form_wrap form_grp">
              <div class="form_item">

                <input id="phone_number" type="text" name="fname" value="{{ old('phone_number') }}" required autofocus placeholder="First name">
              </div>

              <div class="form_item">

                <input id="phone_number" type="text" name="lname" value="{{ old('phone_number') }}" required autofocus placeholder="Last name">
              </div>
            </div>
            <div class="form_wrap form_grp">
              <div class="form_item">
               
                <select name="gender">
                  <option value="#">Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            


               <div class="form_item">
              <center><a href="{{ route('login') }}">
                {{ __('Already registered?') }}
              </a>

              <x-primary-button style="background: #06BBCC;border: none;">
                {{ __('Register') }}
              </x-primary-button>
            </center>
            </div>
            </div>
          </div>
        </form>


      </div>
    </div>



