<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job-test</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-900 h-screen">
        <div class="h-full flex justify-center items-center">
                <div class="w-96">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option value="telegram" selected>Telegram</option>
                        <option value="sms">Sms</option>
                        <option value="email">Email</option>
                    </select>
                </div>
        </div>
    </body>
</html>
