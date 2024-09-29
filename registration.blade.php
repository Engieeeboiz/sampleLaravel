<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href={{ asset('./css/registration.css')}}>
    </head>
        <body>
            <section>
                <div class="form-container">
                    <form action="{{ route('registration.store')}}" method="POST">
                        @csrf
                        <div class="form-container-form">
                            <div class="label-input-container">
                                <div id="sign-up-div"> 
                                    <h1 id="sign-up"> Sign Up</h1>
                                    <p style="font-size: 1.1rem; color: #e3e3e3; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 500;"> Bogsame</p>
                                </div>
                            {{-- Name --}}
                                <div class="input-name-container">
                                    <input type="text" id="user_lastName" name="user_lastName" class="input-name" placeholder="Last Name">
                                </div>
                                
                                <div class="input-name-container">
                                    <input type="text" id="user_firstName" name="user_firstName" class="input-name" placeholder="First Name">
                                </div>
                                
                                <div class="input-name-container">
                                    <input type="text" id="user_middleName" name="user_middleName" class="input-name" placeholder="Middle Name">
                                </div>
                                <div class="age-birthdate-container">
                                    {{-- Age --}}
                                    <div class="input-age-container">
                                        <input type="text" id="user_age" name="user_age" placeholder="Age">
                                    </div>
                                    {{-- Gender --}}
                                    <div class="input-gender-container">
                                        <select id="user_gender" name="user_gender">
                                            <option value="Gender"> Gender </option>
                                            <option value=""> Female </option>
                                            <option value=""> Male </option>
                                        </select>
                                    </div>
                                    {{-- Birth Date --}}
                                    <div class="input-bday-container">
                                        <select id="user_birthday" name="user_birthday">
                                            <option value="day"> Day </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                            <option value="8"> 8 </option>
                                            <option value="9"> 9 </option>
                                            <option value="10"> 10 </option>
                                            <option value="11"> 11 </option>
                                            <option value="12"> 12 </option>
                                            <option value="13"> 13 </option>
                                            <option value="14"> 14 </option>
                                            <option value="15"> 15 </option>
                                            <option value="16"> 16 </option>
                                            <option value="17"> 17 </option>
                                            <option value="18"> 18 </option>
                                            <option value="19"> 19 </option>
                                            <option value="20"> 20 </option>
                                            <option value="21"> 21 </option>
                                            <option value="22"> 22 </option>
                                            <option value="23"> 23 </option>
                                            <option value="24"> 24 </option>
                                            <option value="25"> 25 </option>
                                            <option value="26"> 26 </option>
                                            <option value="27"> 27 </option>
                                            <option value="28"> 28 </option>
                                            <option value="29"> 29 </option>
                                            <option value="30"> 30 </option>
                                            <option value="31"> 31 </option>
                                        </select>
                                    </div>
                                    <div class="user_bMonth">
                                        <select id="user_birthmonth" name="user_birthmonth">
                                            <option value="Month"> Month </option>
                                            <option value="January"> January </option>
                                            <option value="February"> February </option>
                                            <option value="march"> March </option>
                                            <option value="April"> April </option>
                                            <option value="May"> May </option>
                                            <option value="June"> June </option>
                                            <option value="July"> July </option>
                                            <option value="Auguest"> August </option>
                                            <option value="September"> September </option>
                                            <option value="October"> October </option>
                                            <option value="November"> November </option>
                                            <option value="December"> December </option>
                                        </select>
                                    </div>
                                    <div class="user_bYear">
                                        <select id="user_birthyear" name="user_birthyear">
                                            <option value="Year"> Year </option>
                                            <option value="2006"> 2006 </option>
                                            <option value="2005"> 2005 </option>
                                            <option value="2004"> 2004 </option>
                                            <option value="2003"> 2003 </option>
                                            <option value="2002"> 2002 </option>
                                            <option value="2001"> 2001 </option>
                                            <option value="2000"> 2000 </option>
                                            <option value="1999"> 1999 </option>
                                            <option value="1998"> 1998 </option>
                                            <option value="1997"> 1997 </option>
                                            <option value="1996"> 1996 </option>
                                            <option value="1995"> 1995 </option>
                                            <option value="1994"> 1994 </option>
                                            <option value="1993"> 1993 </option>
                                            <option value="1992"> 1992 </option>
                                            <option value="1991"> 1991 </option>
                                            <option value="1990"> 1990 </option>
                                            <option value="1989"> 1989 </option>
                                            <option value="1988"> 1988 </option>
                                            <option value="1987"> 1987 </option>
                                            <option value="1986"> 1986 </option>
                                            <option value="1985"> 1985 </option>
                                            <option value="1984"> 1984 </option>
                                            <option value="1983"> 1983 </option>
                                            <option value="1982"> 1982 </option>
                                            <option value="1981"> 1981 </option>
                                            <option value="1980"> 1980 </option>
                                        </select>
                                    </div>
                                </div>
                                    {{-- Email Address --}}
                                <div class="input-email-container">
                                    <input type="text" id="user_email" name="user_email" placeholder="Email Address">
                                </div>
                            {{-- Password --}}
                            <div class="input-password-container">
                                <input type="password" id="user_password" name="user_password" placeholder="Password">
                            </div>
                            {{-- Contact Number --}}                        
                                <div class="input-number-container">
                                    <input type="text" id="user_contact" name="user_contact" placeholder="Mobile Number">
                                </div>
                                <div class="buttons-div">
                                    <button type="submit" id="btn_signup" name="user_signup"> Sign Up </button>
                                    <a href="{{ route('welcome')}}" id="btn_cancel"> Cancel </a>
                                </div>
                            </div>                        
                        </div>
                    </form>
                </div>
            </section>
 
            <footer>
                <div class="footer-icons">
                    <div class="icons-div">    
                        <a href="https://www.facebook.com/randomone00" target="_blank" class="link-icons"><img src="img/facebook-logo.png" alt="Facebook" class="icons"></a>
                    </div>
                    <div class="icons-div">
                        <a href="https://www.instagram.com/anaknimilagros/" target="_blank" class="link-icons"><img src="img/instagram-logo.png" alt="Instagram" class="icons"></a>
                    </div>
                    <div class="icons-div">
                        <a href="https://github.com/Engieeeboiz" target="_blank" class="link-icons"><img src="img/github-logo.png" alt="Github" class="icons"></a>
                    </div>  
                </div>
                <div class="footer-rights">
                    <p class="rights"> All rights reserves {{date('Y')}}</p>
                </div>      
            </footer>
        </body>
    </html>