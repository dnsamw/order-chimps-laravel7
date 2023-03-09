<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Orderchimps Mailer</title>
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            .container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .mail-head {
                padding: 2rem;
                background-color: #00f09c;
            }
            .mail-head h2{
                font-size: 2.5rem;
            }

            .mail-body {
                padding: 1rem 2rem;
                background-color: rgb(215, 250, 245);
            }

            .mail-body h2 {
                padding: 1rem 0;
            }
            .mail-body p {
                padding: 0.5rem 0;
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="mail-head">
                <h1>Orderchimps Partner Qery</h1>
                <small>orderchimps.com</small>

                @if ($details['influencer'] == 'on' && $details['reseller'] == '')
                   <h2>influencer</h2> 
                @elseif ($details['influencer'] == '' && $details['reseller'] == 'on')
                   <h2>reseller</h2> 
                @endif

            </div>

            <div class="mail-body">
                <h2>Partner Details</h2>
                <div class="details">
                    <p>
                        E-mail :
                        <a href="mailto: {{$details['email']}}"
                            >{{$details['email']}}</a
                        >
                    </p>
                    <p>
                </div>
            </div>
        </div>
    </body>
</html>