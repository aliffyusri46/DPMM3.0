<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 px-20">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
