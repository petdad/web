<template>
    <div class="max-w-full rounded overflow-hidden shadow-lg bg-white">

        <div class="px-6 py-4">
            <div class="flex items-center mb-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    :height="100"
                    viewBox="0 0 200 240"
                >

                    <circle cx="100" cy="100" r="90" fill="#34D399" />


                    <circle cx="100" cy="80" r="50" fill="#10B981" />


                    <path
                        d="M75,60 Q65,40 55,60"
                        stroke="#065F46"
                        stroke-width="5"
                        fill="none"
                    />
                    <path
                        d="M125,60 Q135,40 145,60"
                        stroke="#065F46"
                        stroke-width="5"
                        fill="none"
                    />


                    <circle cx="80" cy="75" r="8" fill="#065F46" />
                    <circle cx="120" cy="75" r="8" fill="#065F46" />
                    <circle cx="82" cy="73" r="3" fill="#FFF" />
                    <circle cx="118" cy="73" r="3" fill="#FFF" />


                    <circle cx="100" cy="90" r="5" fill="#065F46" />


                    <path
                        d="M95,105 Q100,115 105,105"
                        stroke="#065F46"
                        stroke-width="2"
                        fill="none"
                    />


                    <ellipse cx="100" cy="160" rx="70" ry="50" fill="#10B981" />


                    <rect
                        x="60"
                        y="150"
                        width="20"
                        height="30"
                        fill="#065F46"
                    />
                    <rect
                        x="120"
                        y="150"
                        width="20"
                        height="30"
                        fill="#065F46"
                    />


                    <path
                        d="M150,160 Q170,140 180,160"
                        stroke="#065F46"
                        stroke-width="5"
                        fill="none"
                    />


                    <text
                        x="50"
                        y="220"
                        font-family="Arial, sans-serif"
                        font-size="30"
                        fill="#065F46"
                    >
                        PetDad
                    </text>
                </svg>
                <div>
                    <div class="font-bold text-xl mb-2">Invest in Petdad</div>
                    <p class="text-gray-700 text-base">
                        I've launched an innovative project focused on advancing
                        pet care through IoT technology.
                    </p>
                </div>
            </div>
        </div>


        <div class="px-6 py-4">
            <div class="flex items-center mb-4">
                <img
                    class="w-12 h-12 rounded-full mr-4 object-fill"
                    src="https://juborajnaofel.xyz/formimage.png"
                    alt="Avatar"
                />
                <div>
                    <div class="font-bold text-xl mb-2">Contact Me</div>
                    <p class="text-gray-700 text-base">
                        If you're interested in discussing investment
                        opportunities or learning more about the project, I'd
                        love to connect with you.
                    </p>
                </div>
            </div>
            <a
                href="mailto:juborajnaofel@gmail.com"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline"
                >Email Me</a
            >

            <a
                href="https://www.juborajnaofel.xyz"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline"
                >www.juborajnaofel.xyz</a
            >
        </div>
    </div>
</template>

<script>
export default {
    name: 'InvestmentCard',
};
</script>

<style scoped>

</style>
