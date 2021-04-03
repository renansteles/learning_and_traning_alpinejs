<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Traning AlpineJs</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" />
</head>
<body>
  <div x-data="{ message: 'Click Me' }" class="px-10 flex items-center justify-center min-h-screen">
      <div class="flex-1 grid grid-cols-4 gap-10">
        <div class="h-32 bg-gray-300">
            <button @click="message = 'I have been clicked' " x-text="message"></button>
        </div>
        <div class="h-32 bg-gray-300"></div>
        <div class="h-32 bg-gray-300"></div>
        <div class="h-32 bg-gray-300"></div>
        <div class="h-32 bg-gray-300"></div>
        <div class="h-32 bg-gray-300"></div>
        <div class="h-32 bg-gray-300"></div>
        <div class="h-32 bg-gray-300"></div>
      </div>
  </div>
</body>
</html>
