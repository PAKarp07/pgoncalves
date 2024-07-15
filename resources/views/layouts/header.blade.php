@include('layouts.head')

<header class="z-1 transparent absolute top-0 left-0  w-full">

        <div class="px-6 py-4 w-[95%] mx-auto">

            <div class="relative mx-6 flex justify-between">

                <div class="header-info">
                    <p class="header-name header-translate header-translateX-left" style="font-family: 'Indie Flower'" >Paulo Gonçalves</p>
                    <hr class="header-hr header-translate header-translateX-left border-top-2 w-[75px] border-Pcolor">
                    <p class="header-role header-translate header-translateX-left">ELECTRICAL ENGINEER | WEB DEVELOPER</p>
                </div>

                <div class="flex items-center">
                    <ul class="header-nav flex gap-6 header-translate header-translateX-right">
                        <li>
                            <p>{{__('Sobre mim')}}</p>
                        </li>
                        <li>
                            <p>{{__('Percurso')}}</p>
                        </li>
                        <li>
                            <p>{{__('Skills')}}</p>
                        </li>
                        <li>
                            <p>{{__('Projetos')}}</p>
                        </li>
                        <li>
                            <p>{{__('Objetivos e ambições')}}</p>
                        </li>
                        <li>
                            <p>{{__('Contactos')}}</p>
                        </li>

                    </ul>

                </div>

            </div>



        </div>


</header>
