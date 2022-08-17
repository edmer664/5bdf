<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Franchise Form</title>

</head>

<body>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .text-center {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;

        }

        td {
            padding: 5px;
            border: #000 1px solid;

        }

        tr {
            border: 1px solid #000;
        }

        .spacer {
            width: 50px
        }

        .box {
            width: 10px;
            height: 10px;
            border: 1px solid #000;
            display: inline-block;
            margin-top:2px
        }

        .box-marked {
            width: 10px;
            height: 10px;
            border: 1px solid #000;
            display: inline-block;
            background-color: #000;
            margin-top:2px
        }
    </style>

    <h2 class="text-center">
        LEAD INQUIRY FORM
    </h2>
    <table style="width: 100%">
        <tr style="background-color: rgb(5, 5, 5);">
            <td colspan="2" class="text-center" style="color: #ddd">
                Please fill-up and submit
            </td>
        </tr>

        <tr>
            <td>
                LAST NAME <br>
                {{ $request->lastName }}
            </td>
            <td>
                FIRST NAME <br>
                {{ $request->firstName }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                HOME ADDRESS <br>
                {{ $request->homeAddress }}
            </td>
        </tr>

        <tr>
            <td>
                TEL. NO <br>
                {{ $request->telNumber }}
            </td>
            <td>
                MOBILE NO. <br>
                {{ $request->mobileNumber }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                COMPANY <br>
                {{ $request->company }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                POSITION <br>
                {{ $request->position }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                COMPANY ADDRESS <br>
                {{ $request->companyAddress }}
            </td>
        </tr>

        <tr>
            <td>
                TEL NO. <br>
                {{ $request->companyTelNumber }}
            </td>
            <td>
                EMAIL <br>
                {{ $request->email }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                Area/location proposed for franchised outlet: <br>
                {{ $request->area }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                Will you consider other areas? <span class="spacer"></span>
                @if ($request->otherAreas == 'yes')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif Yes <span class="spacer"></span>
                @if ($request->otherAreas == 'no')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif No
                <br>
                SPECIFY: <span class="spacer"></span>
                {{ $request->otherAreasDesc }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                I can invest the total amount of:(in Pesos) <br>
                {{ $request->capital }}
            </td>
        </tr>

        <tr>
            <td>
                Will you be acitvely involved in the business? <br> <br>

                @if ($request->involvement == 'individual')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif As an individual <br>
                @if ($request->involvement == 'partners')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif With partners
            </td>
            <td>
                I plan to operate the franchise: <br> <br>

                @if ($request->operation == 'individual')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif As an individual <br>
                @if ($request->operation == 'partners')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif With partners
            </td>
        </tr>

        <tr>
            <td>
                BUSINESS BACKGROUND: <br>
                {{ $request->businessBackground }}

            </td>

            <td>
                BACKGROUND IN A SIMILAR BUSINESS: <br>
                {{ $request->similarBackround }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                OTHER PLANS/REMARKS OR SUGGESTIONS <br>
                @if ($request->remarks)
                    {{ $request->remarks }}
                @else
                    <br>
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <b>HOW DID YOU FIND US?</b> <span class="spacer"></span>
                @if ($request->source == 'Trade show')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif Trade show <span class="spacer"></span>
                @if ($request->source == 'Ad')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif Ad <span class="spacer"></span>
                @if ($request->source == 'Social media')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif Social media <span class="spacer"></span>
                @if ($request->source == 'Referral')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif Referral <br>
                @if ($request->source == 'Others')
                    <span class="box-marked"></span>
                @else
                    <span class="box"></span>
                @endif Others


            </td>
        </tr>

        <tr>
            <td colspan="2">
                <h3 class="text-center">
                    REQUEST FOR PRESENTATION
                </h3>
                I AM AVAILABLE ON DATE: <b>{{ Date::parse($request->presentationDate)->format('m/d/Y h:i A') }} </b><br>
            </td>
        </tr>


    </table>
</body>

</html>
