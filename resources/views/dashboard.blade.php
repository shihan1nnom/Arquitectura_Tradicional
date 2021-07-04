<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 30px">
                    <h1 style="font-family: Courier New; font-size: 30px">Funciones del sistema:</h1>
                    <ul style="font-family: Courier New; list-style-type: circle; padding-left: 40px">
                        <li style="padding-left: 40px">Emision de compensacion</li>
                        <li style="padding-left: 40px">Registro de pasajeros afectados</li>
                        <li style="padding-left: 40px">Registro de motivo de afectacion</li>
                        <li style="padding-left: 40px">Solicitud de emision de compensacion</li>
                        <li style="padding-left: 40px">Solicitud de cancelacion de compensacion</li>
                    </ul>
                    <p style="font-family: Courier New; padding: 20px">
                        Nota: Las funcionalidades aqui descritas son acorde al caso de estudio, es decir, las funcionalidades adicionales que son necesarias del sistema no son incluidas. 
                        Tampoco se crean controladores del sistema, ni vistas requeridas por cada uno de los contraladores para la gestion de cada una de las funciones [De acuerdo lo indicado en la guia, solo se requiere mencion de las funcion del caso de estudio]. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
