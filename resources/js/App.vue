

<template>


    <div class="text-white flex flex-row min-h-screen">
        <aside class="flex-none w-28 border-l">
            <ul>
                <li class="p-4 hover:bg-gray-400 text-white"><router-link to="/">داشبورد</router-link></li>
                <li class="p-4 hover:bg-gray-400 text-white"><router-link to="/artists">هنرمندان</router-link></li>
                <li class="p-4 hover:bg-gray-400 text-white"><router-link to="/events">رویداد ها</router-link></li>
            </ul>
        </aside>

        <main class="flex-1">
            <router-view v-slot="{ Component, route }">
                <div :key="route.name">
                    <header class="p-4">
                        <h3 class="text-white">{{route.faName?route.faName:route.name}}</h3>
                    </header>
                    <main class="p-4">
                        <Component :is="Component"/>
                    </main>
                </div>
            </router-view>
        </main>
    </div>










</template>

