<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Visix Wiki</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/VW1.png') }}" rel="shortcut icon">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			@font-face{
				font-family: "Gloss And Bloom";
				src: url(fonts/Gloss_And_Bloom.ttf) format('truetype');
			}
			
			.btn {
			  display: inline-block;
			  font-weight: 400;
			  text-align: center;
			  white-space: nowrap;
			  vertical-align: middle;
			  -webkit-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  user-select: none;
			  border: 1px solid transparent;
			  padding: 0.375rem 0.75rem;
			  font-size: 1rem;
			  line-height: 1.5;
			  border-radius: 0.25rem;
			  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
			}
			
			@media screen and (prefers-reduced-motion: reduce) {
			  .btn {
			    transition: none;
			  }
			}
			
			.btn:hover, .btn:focus {
			  text-decoration: none;
			}
			
			.btn:focus, .btn.focus {
			  outline: 0;
			  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
			}
			
			.btn.disabled, .btn:disabled {
			  opacity: 0.65;
			}
			
			.btn:not(:disabled):not(.disabled) {
			  cursor: pointer;
			}
			
			a.btn.disabled,
			fieldset:disabled a.btn {
			  pointer-events: none;
			}
			
			.btn-outline-secondary {
			  color: #6c757d;
			  background-color: transparent;
			  background-image: none;
			  border-color: #6c757d;
			}
			
			.btn-outline-secondary:hover {
			  color: #fff;
			  background-color: #6c757d;
			  border-color: #6c757d;
			}
			
			.btn-outline-secondary:focus, .btn-outline-secondary.focus {
			  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
			}
			
			.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
			  color: #6c757d;
			  background-color: transparent;
			}
			
			.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
			.show > .btn-outline-secondary.dropdown-toggle {
			  color: #fff;
			  background-color: #6c757d;
			  border-color: #6c757d;
			}
			
			.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
			.show > .btn-outline-secondary.dropdown-toggle:focus {
			  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
			}
			
			.btn-sm,
			.btn-group-sm > .btn {
			  padding: 0.25rem 0.5rem;
			  font-size: 0.7875rem;
			  line-height: 1.5;
			  border-radius: 0.5rem;
			}
			
			.text-dark {
			  color: #343a40 !important;
			  text-decoration: none;
			}
			
			.badge-pill {
			  padding-right: 0.6em;
			  padding-left: 0.6em;
			  border-radius: 10rem;
			}
			
			a.text-dark:hover, a.text-dark:focus {
			  color: #ffffff !important;
			  text-decoration: none;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md" style="font-family: Gloss And Bloom">
                    Contact Us
                </div>
                <form action="{{ route('enquiry.send') }}" method="post">
                	@csrf
                	<label><b>Name:</b></label>
                	<input type="text" name="name" placeholder="Your Name" style="border: 1px solid #ced4da; border-radius: 0.5rem; padding: 5px">
                	<label><b>E-Mail:</b></label>
                	<input type="text" name="email" placeholder="Your E-mail" style="border: 1px solid #ced4da; border-radius: 0.5rem; padding: 5px">
                	<p style="margin-top:50px"><b>Your Question</b></p>
                	<textarea type="message" name="question" placeholder="Your Question Here" style="min-width: 450px; min-height:200px; border: 1px solid #ced4da; border-radius: 0.5rem; padding: 5px"></textarea>
                	<div>
                		<button class="btn btn-sm btn-outline-secondary" type="submit" style="min-width:250px">Send!</button>
                	</div>
                </form>

            </div>
        </div>
    </body>
</html>
