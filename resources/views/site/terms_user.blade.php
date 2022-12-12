<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('build/assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_DESCRIPTION', 'Laravel APP') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS', 'laravel, app') }}">
    <meta name="author" content="{{ env('APP_AUTHOR', 'Laravel') }}">
    <title xmlns="http://www.w3.org/1999/html">{{ __('Terms and Conditions & Privacy Policy') }}
        - {{ env('APP_NAME', 'Laravel APP') }}
        - {{ env('APP_DESCRIPTION', 'Laravel APP') }}</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

</head>
<!-- END: Head -->

<body class="bg-gray-100 text-gray-700 font-sans leading-normal tracking-normal">

<nav id="header" class="fixed w-full z-10 top-0">

    <div id="progress" class="h-1 z-20 top-0"
         style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

        <div class="pl-4">
            <a id="titleApp" class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"
               href="#">
                {{ env('APP_NAME', 'Laravel') }}
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        <div
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a id="yearApp" class="inline-block py-2 px-4 text-gray-900 font-bold no-underline"
                       href="#">{{ date('Y') }}</a>
                </li>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Pin to top right corner -->
                <div class="absolute top-0 right-0 h-12 w-18 p-4">
                    <button class="js-change-theme focus:outline-none">🌙</button>
                </div>
            </ul>
        </div>
    </div>
</nav>

<!--Container-->
<div class="container w-full md:max-w-3xl mx-auto pt-20">

    <div id="main-content" class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
         style="font-family:Georgia,serif;">

        <!--Title-->
        <div class="font-sans">
            <p class="text-base md:text-sm text-green-500 font-bold">&lt;
                <a href="{{ route('login') }}"
                   class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Regresar</a></p>
            <h1 id="titlePost" class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                Términos,
                condiciones y política de privacidad</h1>
            <p class="text-sm md:text-base font-normal text-gray-600">Publicado 11 Diciembre 2022</p>
        </div>
        <br>
        <!--Post Content-->

        <!-- Page Content -->
        <div class="w-full">
            <!-- Story -->
            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
            <article class="js-gallery story text-justify" style="font-size:1.25rem">
                <h3>1.CONDICIONES GENERALES Y SU ACEPTACIÓN </h3>
                <p>
                    Estas condiciones generales (en adelante, las “Condiciones Generales”) regulan el uso
                    del servicio
                    de portal de Internet
                    <strong>www.{{ env('APP_URL_PORTAL') }}</strong> (en adelante, el “Portal”) que el
                    <strong>{{ env('APP_COMPANY_LARGE') }} </strong>
                    (en adelante, <strong>“{{ env('APP_COMPANY') }}”</strong>) pone a disposición de los
                    usuarios de
                    Internet.
                </p>
                <p>
                    La utilización del Portal atribuye la condición de usuario del Portal (en adelante, el
                    “Usuario”) y
                    expresa la aceptación plena
                    y sin reservas del Usuario de todas y cada una de las Condiciones Generales en la
                    versión publicada
                    por {{ env('APP_COMPANY') }}
                    en el momento mismo en que el Usuario acceda al Portal.
                    En consecuencia, el Usuario debe leer atentamente las Condiciones Generales en cada una
                    de las
                    ocasiones en que se proponga utilizar
                    el Portal.
                </p>
                <p>
                    La utilización de ciertos servicios ofrecidos a los Usuarios a través del Portal se
                    encuentra
                    sometida a condiciones
                    particulares propias que, según los casos, sustituyen, completan y/o modifican las
                    Condiciones
                    Generales
                    (en adelante, las “Condiciones Particulares”). Con anterioridad a la utilización de
                    dichos
                    servicios, por tanto,
                    el Usuario también ha de leer atentamente las correspondientes Condiciones Particulares.
                </p>
                <p>
                    Asimismo, la utilización del Servicio se encuentra sometida igualmente a todos los
                    avisos,
                    reglamentos de uso e instrucciones
                    puestos en conocimiento del Usuario por {{ env('APP_COMPANY') }}, que completan lo
                    previsto en estas
                    Condiciones Generales en cuanto no se opongan a ellas.
                </p>
                <h4>1.1.CONDICIONES DE ACCESO Y UTILIZACIÓN DEL PORTAL</h4>
                <p>Carácter gratuito del acceso y utilización del Portal</p>
                <p>
                    La prestación del servicio de Portal por parte de {{ env('APP_COMPANY') }} es gratuito
                    para la
                    comunidad del {{ env('APP_COMPANY') }}.
                    Los usuarios se deben registar en el sistema con un correo valido de la institucion o
                    acercarse a la
                    oficina mas cercana del
                    {{ env('APP_COMPANY') }} para que un funcionario realice la inscripcion en el sistema.
                </p>
                <h4>1.2.OBLIGACIÓN DE HACER UN USO CORRECTO DEL PORTAL Y DE LOS SERVICIOS</h4>
                <p>
                    El Usuario se compromete a utilizar el Portal y los Servicios de conformidad con la ley,
                    estas
                    Condiciones Generales,
                    así como con la moral, las buenas costumbres y el orden público.
                </p>
                <p>
                    El Usuario se obliga a abstenerse de utilizar el Portal y los Servicios con fines o
                    efectos
                    ilícitos, contrarios a lo establecido en estas
                    Condiciones Generales, lesivos de los derechos e intereses de terceros, o que de
                    cualquier forma
                    puedan dañar, inutilizar, sobrecargar
                    o deteriorar el Portal y los Servicios o impedir la normal utilización o disfrute del
                    Portal y de
                    los Servicios por parte de los Usuarios.
                </p>
                <h4>1.3.MEDIOS PARA LA OBTENCIÓN DE CONTENIDOS</h4>
                <p>
                    El Usuario deberá abstenerse de obtener e incluso de intentar obtener informaciones,
                    mensajes,
                    gráficos, dibujos, archivos de sonido y/o
                    imagen, fotografías, grabaciones, archivos ofimaticos, software y, en general, cualquier
                    clase de
                    material accesibles a través del Portal
                    o de los Servicios (en adelante, los “Contenidos”) empleando para ello medios o
                    procedimientos
                    distintos de los que, según los casos,
                    se hayan puesto a su disposición a este efecto o se hayan indicado a este efecto en las
                    páginas web
                    donde se encuentren los Contenidos o,
                    en general, de los que se empleen habitualmente en Internet a este efecto siempre que no
                    entrañen un
                    riesgo de daño o inutilización del Portal,
                    de los Servicios y/o de los Contenidos.
                </p>
                <p>
                    El material fotográfico utilizado en el Portal son obras protegidas por las normas de
                    derechos de
                    autor y tanto el {{ env('APP_COMPANY') }}
                    como el autor del portal "{{env('APP_CREATOR')}}", tienen los derechos patrimoniales de
                    exhibición y
                    puesta disposición de estas en el Portal.
                    En todo caso, los Usuarios requerirán de autorización previa para el uso de las imágenes
                    almacenadas
                    en el Portal.
                </p>
                <h4>1.4.PROPIEDAD INTELECTUAL</h4>
                <p>
                    Se prohíbe la modificación, reproducción, publicación o transferencia de cualquier
                    Contenido a otras
                    personas, o su uso para cualquier fin
                    Excepto en la medida en que la ley vigente lo permita, está prohibido desensamblar,
                    descompilar,
                    aplicar ingeniería inversa o intentar por
                    cualquier medio romper la protección del contenido.
                </p>
                <p>
                    Todos los contenidos, elementos e información de este Sitio incluyendo todo texto,
                    formato,
                    imágenes, música, marcas, logotipos, enseñas,
                    nombres comerciales, sonidos, gráficos, videos, animación, formatos y demás materiales
                    de este
                    Portal son de propiedad de {{ env('APP_COMPANY') }},
                    sus filiales y afiliadas y controlantes, y aquellos de terceros contratistas,
                    licenciantes o
                    cedentes que corresponda.
                </p>
                <p>
                    Algunos de los Contenidos están protegidos por las leyes de derechos de autor y de marca
                    registrada.
                    Cualquier uso no autorizado sobre los
                    Servicios y Contenidos del Portal que viole los derechos de propiedad y de propiedad
                    intelectual
                    de {{ env('APP_COMPANY') }} o de terceros,
                    podrá implicar el inicio de las acciones legales correspondientes por parte de los
                    titulares de los
                    derechos.
                </p>
                <p>
                    El acceso o uso de este Portal no implicará de ninguna manera la concesión o negación de
                    cualquier
                    licencia, concesión o derecho de uso sobre
                    cualquiera de las marcas, nombres, logotipos, diseños o Contenidos protegidos por el
                    derecho de
                    propiedad intelectual de {{ env('APP_COMPANY') }}
                    o de cualquier tercero, según corresponda.
                </p>
                <p>
                    No se permite la creación de páginas web, sitios de Internet, documentos electrónicos o
                    programas de
                    computador o aplicaciones informáticas de
                    cualquier tipo que contengan hiper-vínculos o marcas que redirijan al navegante a
                    cualquier
                    Contenido de este Portal, sin la correspondiente autorización.
                </p>
                <h4>1.5.USO CORRECTO DE LOS CONTENIDOS</h4>
                <p>
                    El Usuario se obliga a usar los Contenidos de forma diligente, correcta y lícita y, en
                    particular,
                    se compromete a abstenerse de:
                <ol type="a" class="">
                    <li>
                        Utilizar los Contenidos de forma, con fines o efectos contrarios a la ley, a la
                        moral y a las
                        buenas costumbres generalmente aceptadas o al orden público;
                    </li>
                    <li>
                        Reproducir o copiar, distribuir, permitir el acceso del público a través de
                        cualquier modalidad
                        de comunicación pública, transformar o
                        modificar los Contenidos, a menos que se cuente con la autorización del titular de
                        los
                        correspondientes derechos o ello resulte legalmente permitido;
                    </li>
                    <li>
                        Suprimir, eludir o manipular el “copyright” y demás datos identificativos de los
                        derechos
                        de {{ env('APP_COMPANY') }} o de sus
                        titulares incorporados a los Contenidos, así como los dispositivos técnicos de
                        protección, las
                        huellas digitales o cualesquiera mecanismos de
                        información que pudieren contener los Contenidos;
                    </li>
                    <li>
                        Emplear los Contenidos y, en particular, la información de cualquier clase obtenida
                        a través del
                        Portal o de los Servicios para remitir
                        publicidad, comunicaciones con fines de venta directa o con cualquier otra clase de
                        finalidad
                        comercial, mensajes no solicitados dirigidos a una
                        pluralidad de personas con independencia de su finalidad, así como a abstenerse de
                        comercializar
                        o divulgar de cualquier modo dicha información.
                    </li>
                </ol>
                </p>
                <h4>1.6.INTRODUCCIÓN DE HIPERVÍNCULOS QUE PERMITAN EL ACCESO A LAS PÁGINAS WEB DEL PORTAL Y
                    A LOS
                    SERVICIOS.</h4>
                <p>
                    Los Usuarios y, en general, aquellas personas que se propongan establecer un
                    hipervínculo entre su
                    página web y el Portal (en adelante, el “Hipervínculo”)
                    deberán cumplir las condiciones siguientes:
                <ol type="a" class="">
                    <li>
                        El Hipervínculo únicamente permitirá el acceso a las páginas web del Portal, pero no
                        podrá
                        reproducirlas de ninguna forma;
                    </li>
                    <li>
                        No se establecerán Hipervínculos con las páginas web del Portal distintas de la
                        home-page o
                        página primera del Portal o de los Servicios;
                    </li>
                    <li>
                        No se creará un browser ni un border enviroment sobre las páginas web del Portal ;
                    </li>
                    <li>
                        No se realizarán manifestaciones o indicaciones falsas, inexactas o incorrectas
                        sobre las
                        páginas web del Portal y los Servicios y, en particular,
                        no se declarará ni dará a entender que {{ env('APP_COMPANY') }} ha autorizado el
                        Hipervínculo o
                        que ha supervisado o asumido de cualquier forma los
                        contenidos o servicios ofrecidos o puestos a disposición de la página web en la que
                        se establece
                        el Hipervínculo;
                    </li>
                    <li>
                        Excepción hecha de aquellos signos que formen parte del mismo Hipervínculo, la
                        página web en la
                        que se establezca el Hiperenlace no contendrá
                        ninguna marca, nombre comercial, rótulo de establecimiento, denominación, logotipo,
                        eslogan u
                        otros signos distintivos pertenecientes a {{ env('APP_COMPANY') }};
                    </li>
                    <li>
                        La página web en la que se establezca el Hiperenlace no contendrá informaciones o
                        contenidos
                        ilícitos, contrarios a la moral y buenas costumbres
                        generalmente aceptadas y al orden público, así como tampoco contendrá contenidos
                        contrarios a
                        cualesquiera derechos de terceros.
                    </li>
                </ol>
                El establecimiento del Hipervínculo no implica en ningún caso la existencia de relaciones
                entre {{ env('APP_COMPANY') }} y el propietario de la página web en la
                que se establezca, ni la aceptación y aprobación por parte de {{ env('APP_COMPANY_LARGE') }}
                de sus
                contenidos o servicios.
                </p>
                <h4>1.7.RESPONSABILIDAD POR DAÑOS Y PERJUICIOS</h4>
                <p>
                    El Usuario responderá de los daños y perjuicios de toda naturaleza que Proexport pueda
                    sufrir,
                    directa o indirectamente, como consecuencia de incumplimiento de
                    cualquiera de las obligaciones derivadas de las Condiciones Generales o de la ley en
                    relación con la
                    utilización del Portal.
                </p>
                <h3>2.OBJETO</h3>
                <p>
                    A través del Portal, el {{ env('APP_COMPANY') }} facilita a los Usuarios el acceso y la
                    utilización
                    de diversos servicios y contenidos puestos a disposición
                    de los Usuarios por el {{ env('APP_COMPANY') }} o por terceros usuarios del Portal y/o
                    terceros
                    proveedores de servicios y contenidos (en adelante, los “Servicios”).
                </p>
                <p>
                    {{ env('APP_COMPANY') }} se reserva el derecho a modificar unilateralmente, en cualquier
                    momento y
                    sin previo aviso, la presentación y configuración del Portal,
                    así como los Servicios y las condiciones requeridas para utilizar el Portal y los
                    Servicios.
                </p>
                <h3>3.DATOS DE CARÁCTER PERSONAL</h3>
                <p>
                    Para utilizar algunos de los Servicios, los Usuarios deben proporcionar previamente
                    al {{ env('APP_COMPANY') }} ciertos datos de carácter personal
                    (en adelante, los “Datos Personales”). El {{ env('APP_COMPANY') }} tratará
                    automatizadamente los
                    Datos Personales con las finalidades así como bajo las
                    condiciones definidas en su Política de Protección de Datos.
                </p>
                <h3>4.EMPLEO DE TECNOLOGÍA COOKIE</h3>
                <p>
                    El {{ env('APP_COMPANY') }} utiliza cookies cuando un Usuario navega por los sitios y
                    páginas web
                    del Portal. Nuestras cookies se asocian únicamente con el
                    usuario en session y su ordenador y no proporcionan referencias que permitan deducir el
                    nombre y
                    apellidos del Usuario.
                </p>
                <p>
                    Las cookies de el {{ env('APP_COMPANY') }} no pueden leer datos de su disco duro ni leer
                    los
                    archivos cookie creados por otros proveedores.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} cifra los datos identificativos del Usuario para mayor
                    seguridad.
                    Gracias a las cookies, resulta posible que el {{ env('APP_COMPANY') }}
                    reconozca a los Usuarios registrados después de que éstos se hayan registrado por
                    primera vez, sin
                    que se tengan que registrarse en cada visita
                    para acceder a las áreas y servicios reservados exclusivamente a ellos.
                </p>
                <p>
                    El Usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla
                    de la
                    recepción de cookies y para impedir la instalación
                    de cookies en su disco duro. Por favor, consulte las instrucciones y manuales de su
                    navegador para
                    ampliar ésta información.
                </p>
                <p>
                    Para utilizar el Portal, no resulta necesario que el Usuario permita la instalación de
                    las cookies
                    enviadas por {{ env('APP_COMPANY') }},
                    sin perjuicio de que en tal caso será necesario que el Usuario se registre cada vez que
                    acceda a un
                    servicio que requiera el previo registro.
                </p>
                <p>
                    Estas cookies serán utilizadas para algunos Servicios como las Listas de Favoritos, por
                    ello, cuando
                    el Usuario comparta sus Listas
                    cualquier persona que tenga acceso a las políticas de privacidad que se encuentran en
                    este
                    documento.
                </p>
                <h3>5.UTILIZACIÓN DEL PORTAL, DE LOS SERVICIOS Y DE LOS CONTENIDOS BAJO EXCLUSIVA
                    RESPONSABILIDAD DEL
                    USUARIO</h3>
                <p>
                    Uso del Portal: el acceso a este significa que usted ha aceptado que el uso que usted
                    hará de este
                    Portal, de sus Contenidos y la información contenida
                    en éste tendrá propósitos legítimos y legales, y se hará en cumplimiento de estos
                    TÉRMINOS Y
                    CONDICIONES y de todas y cualesquiera leyes aplicables, en
                    todo caso, bajo su única responsabilidad.
                </p>
                <p>
                    Particular pero no exclusivamente, el uso de este Portal, sus Contenidos y la
                    información contenida
                    en el Portal se encuentra limitado por lo siguiente:
                    Usted acepta que no usará este Portal, sus Contenidos o la información contenida en
                    éste, para:
                <ol type="a" class="">
                    <li>
                        Transmitir a terceros o de cualquier manera publicar información que es falsa,
                        dañina, hostil,
                        abusiva, irritante, problemática, amenazante,
                        tortuosa, difamatoria, vulgar, obscena, pornográfica, infundada, odiosa o
                        perjudicial, o
                        respecto de la cual no se cuenta con las debidas
                        autorizaciones legales o contractuales;
                    </li>
                    <li>
                        Ocasionar daño a menores de edad o promover o efectuar daños físicos o materiales a
                        cualquier
                        persona o grupo de personas naturales y jurídicas, o a animales;
                    </li>
                    <li>
                        Utilizar la identidad o la información personal de personas (naturales o jurídicas)
                        mencionadas
                        en el Portal, para cualquier propósito o finalidad;
                    </li>
                    <li>
                        Transmitir o emitir material que contenga virus informáticos o cualquier otro
                        código, programa
                        de computador o aplicación destinada a interrumpir,
                        destruir, restringir o perjudicar la funcionalidad de computadores, programas de
                        computador,
                        sistemas de información, redes de telecomunicaciones
                        o infraestructura y servicios de terceros; de manera intencionada o sin intención
                        violar o
                        incumplir cualquier ley aplicable nacional, local,
                        estatal o internacional, incluyendo pero sin limitarse a las normas de privacidad y
                        protección
                        de datos;
                    </li>
                    <li>
                        Recolectar, guardar y administrar datos personales sobre personas naturales y
                        jurídicas sin la
                        correspondiente autorización y en incumplimiento
                        de las leyes aplicables;
                    </li>
                    <li>
                        Ejecutar, planear, armar, estructurar o realizar prácticas o actividades de carácter
                        criminal;
                    </li>
                    <li>
                        Infringir los derechos de propiedad intelectual de {{ env('APP_COMPANY') }} o de
                        terceros, entre
                        otras conductas lesivas de terceros o de las leyes aplicables.
                    </li>
                </ol>
                </p>
                <h3>6.EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD</h3>
                <h4>6.1.EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD POR EL FUNCIONAMIENTO DEL PORTAL Y DE
                    LOS
                    SERVICIOS</h4>
                <h5>6.1.1.DISPONIBILIDAD Y CONTINUIDAD, UTILIDAD Y FALIBILIDAD</h5>
                <p>
                    El {{ env('APP_COMPANY') }} no garantiza la disponibilidad y continuidad del
                    funcionamiento del
                    Portal y de los Servicios. Cuando ello sea posible, el {{ env('APP_COMPANY') }}
                    advertirá previamente las interrupciones en el funcionamiento del Portal y de los
                    Servicios.
                    El {{ env('APP_COMPANY') }} tampoco garantiza la utilidad
                    del Portal y de los Servicios para la realización de ninguna actividad en particular, ni
                    su
                    infalibilidad y, en particular, aunque no de modo exclusivo,
                    que los Usuarios puedan efectivamente utilizar el Portal y los Servicios, acceder a las
                    distintas
                    páginas web que forman el Portal o a
                    aquellas desde las que se prestan los Servicios.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA FALTA DE DISPONIBILIDAD
                    O DE CONTINUIDAD DEL FUNCIONAMIENTO DEL PORTAL Y DE LOS SERVICIOS, A LA DEFRAUDACIÓN DE
                    LA UTILIDAD
                    QUE LOS USUARIOS HUBIEREN PODIDO ATRIBUIR
                    AL PORTAL Y A LOS SERVICIOS, A LA FALIBILIDAD DEL PORTAL Y DE LOS SERVICIOS, Y EN
                    PARTICULAR, AUNQUE
                    NO DE MODO EXCLUSIVO, A LOS FALLOS EN EL ACCESO
                    A LAS DISTINTAS PÁGINAS WEB DEL PORTAL O A AQUELLAS DESDE LAS QUE SE PRESTAN LOS
                    SERVICIOS.
                </p>
                <h5>6.1.2.PRIVACIDAD Y SEGURIDAD EN LA UTILIZACIÓN DEL PORTAL Y DE LOS SERVICIOS</h5>
                <P>
                    EL {{ env('APP_COMPANY') }} no garantiza la privacidad y seguridad de la utilización del
                    Portal y de
                    los Servicios y, en particular, no garantiza que terceros
                    no autorizados no puedan tener conocimiento de la clase, condiciones, características y
                    circunstancias del uso que los Usuarios hacen del Portal y de los Servicios.
                </P>
                <P>
                    EL {{ env('APP_COMPANY') }} EXCLUYE TODA RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS DE
                    TODA
                    NATURALEZA QUE PUDIERAN DEBERSE AL CONOCIMIENTO QUE PUEDAN TENER TERCEROS
                    NO AUTORIZADOS DE LA CLASE, CONDICIONES, CARACTERÍSTICAS Y CIRCUNSTANCIAS DEL USO QUE
                    LOS USUARIOS
                    HACEN DEL PORTAL Y DE LOS SERVICIOS.
                </P>
                <h5>6.1.3.EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD POR LOS CONTENIDOS</h5>
                <H6>6.1.3.1.CALIDAD</H6>
                <p>
                    EL {{ env('APP_COMPANY') }} no controla ni garantiza la ausencia de virus ni de otros
                    elementos en
                    los Contenidos que puedan producir alteraciones en su
                    sistema informático (software y hardware) o en los documentos electrónicos y ficheros
                    almacenados en
                    su sistema informático.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA PRESENCIA
                    DE VIRUS O A LA PRESENCIA DE OTROS ELEMENTOS EN LOS CONTENIDOS QUE PUEDAN PRODUCIR
                    ALTERACIONES EN
                    EL SISTEMA INFORMÁTICO, DOCUMENTOS ELECTRONICOS
                    O FICHEROS DE LOS USUARIOS.
                </p>
                <h5>6.1.4.LICITUD, FIABILIDAD Y UTILIDAD</h5>
                <p>
                    EL {{ env('APP_COMPANY') }} no garantiza la licitud, fiabilidad y utilidad de los
                    Contenidos.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA TRANSMISIÓN, DIFUSIÓN,
                    ALMACENAMIENTO, PUESTA A DISPOSICIÓN, RECEPCIÓN, OBTENCIÓN O ACCESO A LOS CONTENIDOS, Y
                    EN
                    PARTICULAR, AUNQUE NO DE MODO EXCLUSIVO, POR LOS DAÑOS Y
                    PERJUICIOS QUE PUEDAN DEBERSE A:
                <ol type="A" class="">
                    <li>
                        EL INCUMPLIMIENTO DE LA LEY, LA MORAL Y LAS BUENAS COSTUMBRES GENERALMENTE ACEPTADAS
                        O EL ORDEN
                        PÚBLICO COMO CONSECUENCIA DE LA TRANSMISIÓN, DIFUSIÓN,
                        ALMACENAMIENTO, PUESTA A DISPOSICIÓN, RECEPCIÓN, OBTENCIÓN O ACCESO A LOS
                        CONTENIDOS;
                    </li>
                    <li>
                        LA INFRACCIÓN DE LOS DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL, DE LOS SECRETOS
                        EMPRESARIALES, DE COMPROMISOS CONTRACTUALES DE CUALQUIER CLASE,
                        DE LOS DERECHOS AL HONOR, A LA INTIMIDAD PERSONAL Y FAMILIAR Y A LA IMAGEN DE LAS
                        PERSONAS, DE
                        LOS DERECHOS DE PROPIEDAD Y DE TODA OTRA NATURALEZA
                        PERTENECIENTES A UN TERCERO COMO CONSECUENCIA DE LA TRANSMISIÓN, DIFUSIÓN,
                        ALMACENAMIENTO,
                        PUESTA A DISPOSICIÓN, RECEPCIÓN, OBTENCIÓN O ACCESO A LOS CONTENIDOS;
                    </li>
                    <li>
                        LA REALIZACIÓN DE ACTOS DE COMPETENCIA DESLEAL Y PUBLICIDAD ILÍCITA COMO
                        CONSECUENCIA DE LA
                        TRANSMISIÓN, DIFUSIÓN, ALMACENAMIENTO,
                        PUESTA A DISPOSICIÓN, RECEPCIÓN, OBTENCIÓN O ACCESO A LOS CONTENIDOS;
                    </li>
                    <li>
                        LA FALTA DE VERACIDAD, EXACTITUD, EXHAUSTIVIDAD, PERTINENCIA Y/O ACTUALIDAD DE LOS
                        CONTENIDOS;
                    </li>
                    <li>
                        LA INADECUACIÓN PARA CUALQUIER CLASE DE PROPÓSITO DE Y LA DEFRAUDACIÓN DE LAS
                        EXPECTATIVAS
                        GENERADAS POR LOS CONTENIDOS;
                    </li>
                    <li>
                        EL INCUMPLIMIENTO, RETRASO EN EL CUMPLIMIENTO, CUMPLIMIENTO DEFECTUOSO O TERMINACIÓN
                        POR
                        CUALQUIER CAUSA DE LAS OBLIGACIONES CONTRAÍDAS
                        POR TERCEROS Y CONTRATOS REALIZADOS CON TERCEROS A TRAVÉS DE O CON MOTIVO DEL ACCESO
                        A LOS
                        CONTENIDOS;
                    </li>
                    <li>
                        LOS VICIOS Y DEFECTOS DE TODA CLASE DE LOS CONTENIDOS TRANSMITIDOS, DIFUNDIDOS,
                        ALMACENADOS,
                        PUESTOS A DISPOSICIÓN O DE OTRA FORMA
                        TRANSMITIDOS O PUESTOS A DISPOSICIÓN, RECIBIDOS, OBTENIDOS O A LOS QUE SE HAYA
                        ACCEDIDO A TRAVÉS
                        DEL PORTAL O DE LOS SERVICIOS.
                    </li>
                </ol>
                </p>
                <h5>6.1.5.EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD POR LOS SERVICIOS PRESTADOS POR
                    TERCEROS A TRAVÉS
                    DEL PORTAL</h5>
                <h6>6.1.5.1.CALIDAD</h6>
                <p>
                    EL {{ env('APP_COMPANY') }} no controla ni garantiza la ausencia de virus ni de otros
                    elementos en
                    los servicios prestados por terceros
                    a través del Portal que puedan producir alteraciones en su sistema informático (software
                    y hardware)
                    o en los documentos electrónicos y ficheros
                    almacenados en su sistema informático.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA PRESENCIA
                    DE VIRUS O A LA PRESENCIA DE OTROS ELEMENTOS LESIVOS EN LOS SERVICIOS PRESTADOS POR
                    TERCEROS A
                    TRAVÉS DEL PORTAL QUE PUEDAN PRODUCIR ALTERACIONES
                    EN EL SISTEMA INFORMÁTICO, DOCUMENTOS ELECTRONICOS O FICHEROS DE LOS USUARIOS.
                </p>
                <h6>6.1.5.2.LICITUD, FIABILIDAD Y UTILIDAD</h6>
                <p>
                    El {{ env('APP_COMPANY') }} no garantiza la licitud, fiabilidad y utilidad de los
                    servicios
                    prestados por terceros a través del Portal.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LOS
                    SERVICIOS PRESTADOS POR TERCEROS A TRAVÉS DEL PORTAL, Y EN PARTICULAR, AUNQUE NO DE MODO
                    EXCLUSIVO,
                    POR LOS DAÑOS Y PERJUICIOS QUE PUEDAN DEBERSE A
                <ol type="A" class="">
                    <li>
                        EL INCUMPLIMIENTO DE LA LEY, LA MORAL Y LAS BUENAS COSTUMBRES GENERALMENTE ACEPTADAS
                        O EL ORDEN
                        PÚBLICO COMO CONSECUENCIA DE LA
                        PRESTACIÓN DE SERVICIOS POR TERCEROS A TRAVÉS DEL PORTAL;
                    </li>
                    <li>
                        LA INFRACCIÓN DE LOS DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL, DE LOS SECRETOS
                        EMPRESARIALES, DE COMPROMISOS CONTRACTUALES DE CUALQUIER
                        CLASE, DE LOS DERECHOS AL HONOR, A LA INTIMIDAD PERSONAL Y FAMILIAR Y A LA IMAGEN DE
                        LAS
                        PERSONAS, DE LOS DERECHOS DE PROPIEDAD Y DE TODA
                        OTRA NATURALEZA PERTENECIENTES A UN TERCERO COMO CONSECUENCIA DE LA PRESTACIÓN DE
                        SERVICIOS POR
                        TERCEROS A TRAVÉS DEL PORTAL;
                    </li>
                    <li>
                        LA REALIZACIÓN DE ACTOS DE COMPETENCIA DESLEAL Y PUBLICIDAD ILÍCITA COMO
                        CONSECUENCIA DE LA
                        PRESTACIÓN DE SERVICIOS POR TERCEROS A TRAVÉS DEL PORTAL;
                    </li>
                    <li>
                        LA FALTA DE VERACIDAD, EXACTITUD, EXHAUSTIVIDAD, PERTINENCIA Y/O ACTUALIDAD DE LOS
                        CONTENIDOS
                        TRANSMITIDOS, DIFUNDIDOS, ALMACENADOS, RECIBIDOS,
                        OBTENIDOS, PUESTOS A DISPOSICIÓN O ACCESIBLES MEDIANTE LOS SERVICIOS PRESTADOS POR
                        TERCEROS A
                        TRAVÉS DEL PORTAL;
                    </li>
                    <li>
                        LA INADECUACIÓN PARA CUALQUIER CLASE DE PROPÓSITO DE Y LA DEFRAUDACIÓN DE LAS
                        EXPECTATIVAS
                        GENERADAS POR LOS SERVICIOS PRESTADOS
                        POR TERCEROS A TRAVÉS DEL PORTAL;
                    </li>
                    <li>
                        EL INCUMPLIMIENTO, RETRASO EN EL CUMPLIMIENTO, CUMPLIMIENTO DEFECTUOSO O TERMINACIÓN
                        POR
                        CUALQUIER CAUSA DE LAS OBLIGACIONES CONTRAÍDAS POR TERCEROS
                        Y CONTRATOS REALIZADOS CON TERCEROS EN RELACIÓN CON O CON MOTIVO DE LA PRESTACIÓN DE
                        SERVICIOS A
                        TRAVÉS DEL PORTAL;
                    </li>
                    <li>
                        LOS VICIOS Y DEFECTOS DE TODA CLASE DE LOS SERVICIOS PRESTADOS POR TERCEROS A TRAVÉS
                        DEL PORTAL.
                    </li>
                </ol>
                </p>
                <h5>6.1.6.EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD POR LOS SERVICIOS Y CONTENIDOS
                    ALOJADOS FUERA DEL
                    PORTAL</h5>
                <p>
                    El Portal pone a disposición de los Usuarios dispositivos técnicos de enlace (tales
                    como, entre
                    otros, links, banners, botones), directorios y herramientas
                    de búsqueda que permiten a los Usuarios acceder a sitios web pertenecientes a y/o
                    gestionados por
                    terceros (en adelante, “Sitios Enlazados”).
                    La instalación de estos enlaces, directorios y herramientas de búsqueda en el Portal
                    tiene por único
                    objeto facilitar a los Usuarios la búsqueda de y acceso
                    a la información disponible en Internet.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} no ofrece ni comercializa por sí ni por medio de tercero los
                    productos y
                    servicios disponibles en los Sitios Enlazados.
                    El {{ env('APP_COMPANY') }} tampoco controla previamente, aprueba, vigila ni hace
                    propios los
                    productos, y servicios, contenidos, información, datos, archivos,
                    productos y cualquier clase de material existente en los Sitios Enlazados. El Usuario,
                    por tanto,
                    debe extremar la prudencia en la valoración y utilización
                    de los servicios, información, datos, archivos, productos y cualquier clase de material
                    existente en
                    los Sitios Enlazados
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} NO GARANTIZA NI ASUME NINGÚN TIPO DE RESPONSABILIDAD POR LOS
                    DAÑOS Y
                    PERJUICIOS DE TODA CLASE QUE PUEDAN DEBERSE A
                <ol type="A" class="">
                    <li>
                        EL FUNCIONAMIENTO, DISPONIBILIDAD, ACCESIBILIDAD O CONTINUIDAD DE LOS SITIOS
                        ENLAZADOS;
                    </li>
                    <li>
                        EL MANTENIMIENTO DE LOS SERVICIOS, CONTENIDOS, INFORMACIÓN, DATOS, ARCHIVOS,
                        PRODUCTOS Y
                        CUALQUIER CLASE DE
                        MATERIAL EXISTENTE EN LOS SITIOS ENLAZADOS;
                    </li>
                    <li>
                        LA PRESTACIÓN O TRANSMISIÓN DE LOS SERVICIOS, CONTENIDOS, INFORMACIÓN, DATOS,
                        ARCHIVOS,
                        PRODUCTOS Y CUALQUIER
                        CLASE DE MATERIAL EXISTENTE EN LOS SITIOS ENLAZADOS;
                    </li>
                    <li>
                        LA CALIDAD, LICITUD, FIABILIDAD Y UTILIDAD DE LOS SERVICIOS, CONTENIDOS,
                        INFORMACIÓN, DATOS,
                        ARCHIVOS, PRODUCTOS Y CUALQUIER CLASE DE MATERIAL
                        EXISTENTE EN LOS SITIOS ENLAZADOS, EN LOS MISMOS TÉRMINOS Y CON EL MISMO ALCANCE
                        DISPUESTO EN LA
                        CONDICIÓN GENERAL 0 Y 0 RESPECTO DE LOS
                        CONTENIDOS Y DE LOS SERVICIOS PRESTADOS POR TERCEROS A TRAVÉS DEL PORTAL.
                    </li>
                </ol>
                </p>
                <h5>6.1.7.EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD POR LA UTILIZACIÓN DEL PORTAL, DE LOS
                    SERVICIOS Y
                    DE LOS CONTENIDOS POR LOS USUARIOS</h5>
                <p>
                    El {{ env('APP_COMPANY') }} no tiene obligación de y no controla la utilización que los
                    Usuarios
                    hacen del Portal, de los Servicios y de los Contenidos.
                    En particular, el {{ env('APP_COMPANY') }} no garantiza que los Usuarios utilicen el
                    Portal, los
                    Servicios y los Contenidos de conformidad con estas Condiciones
                    Generales y, en su caso, las Condiciones Particulares que resulten de aplicación, ni que
                    lo hagan de
                    forma diligente y prudente.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} tampoco tiene la obligación de verificar y no verifica la
                    identidad de
                    los Usuarios, ni la veracidad, vigencia, exhaustividad y/o
                    autenticidad de los datos que los Usuarios proporcionan sobre sí mismos a otros
                    Usuarios.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DAÑOS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUDIERAN DEBERSE A LA UTILIZACIÓN DE LOS SERVICIOS
                    Y DE LOS CONTENIDOS POR PARTE DE LOS USUARIOS O QUE PUEDAN DEBERSE A LA FALTA DE
                    VERACIDAD,
                    VIGENCIA, EXHAUSTIVIDAD Y/O AUTENTICIDAD DE LA INFORMACIÓN
                    QUE LOS USUARIOS PROPORCIONAN A OTROS USUARIOS ACERCA DE SÍ MISMOS Y, EN PARTICULAR,
                    AUNQUE NO DE
                    FORMA EXCLUSIVA, POR LOS DAÑOS Y PERJUICIOS DE TODA NATURALEZA
                    QUE PUEDAN DEBERSE A LA SUPLANTACIÓN DE LA PERSONALIDAD DE UN TERCERO EFECTUADA POR UN
                    USUARIO EN
                    CUALQUIER CLASE DE COMUNICACIÓN REALIZADA A TRAVÉS DEL PORTAL.
                </p>
                <h3>7.NO LICENCIA</h3>
                <p>
                    EL {{ env('APP_COMPANY') }} no concede ninguna licencia o autorización de uso de ninguna
                    clase sobre
                    sus derechos de propiedad industrial
                    e intelectual o sobre cualquier otra propiedad o derecho relacionado con el Portal, los
                    Servicios o
                    los Contenidos.
                </p>
                <h3>8.DENEGACIÓN Y RETIRADA DEL ACCESO AL PORTAL Y/O A LOS SERVICIOS</h3>
                <p>
                    EL {{ env('APP_COMPANY') }} se reserva el derecho a denegar o retirar el acceso al
                    Portal y/o a los
                    Servicios, en cualquier
                    momento y sin necesidad de preaviso a aquellos Usuarios que incumplan estas Condiciones
                    Generales o
                    las Condiciones Particulares que resulten de aplicación.
                </p>
                <h3>9.PROCEDIMIENTO EN CASO DE VIOLACIÓN DE DERECHOS DE PROPIEDAD INTELECTUAL</h3>
                <p>
                    En el caso de que cualquier Usuario o un tercero considere que cualquiera de los
                    Contenidos ha sido
                    introducido en el Portal con violación
                    de sus derechos de propiedad intelectual deberá enviar una notificación a
                    el {{ env('APP_COMPANY') }} en la que se contengan los siguientes extremos:
                <ol type="A" class="">
                    <li>Datos personales: nombre, dirección, número de teléfono y dirección de correo
                        electrónico del
                        reclamante;
                    </li>
                    <li>
                        Firma auténtica o equivalente, con los datos personales del titular de los derechos
                        de propiedad
                        intelectual
                        supuestamente infringidos o de la persona autorizada para actuar en nombre y por
                        cuenta del
                        titular de los
                        derechos de propiedad intelectual supuestamente infringidos;
                    </li>
                    <li>
                        Indicación precisa y completa de los Contenidos protegidos mediante los derechos de
                        propiedad
                        intelectual supuestamente infringidos,
                        así como de su localización en el Portal;
                    </li>
                    <li>
                        Declaración expresa y clara de que la utilización de los Contenidos indicados se ha
                        realizado
                        sin el consentimiento del titular de los
                        derechos de propiedad intelectual supuestamente infringidos;
                    </li>
                    <li>
                        Declaración expresa, clara y bajo la responsabilidad del reclamante de que la
                        información
                        proporcionada en la notificación es exacta
                        y de que la utilización de los contenidos constituye una violación de sus derechos
                        de propiedad
                        intelectual.
                    </li>
                </ol>
                </p>
                <h3>10.DURACIÓN Y TERMINACIÓN</h3>
                <p>
                    La prestación del servicio de Portal y de los demás Servicios tiene, en principio, una
                    duración
                    indefinida. El {{ env('APP_COMPANY') }}, no obstante,
                    está autorizada para dar por terminada o suspender la prestación del servicio del Portal
                    y/o de
                    cualquiera de los Servicios en cualquier momento, sin
                    perjuicio de lo que se hubiere dispuesto al respecto en las correspondientes Condiciones
                    Particulares. Cuando ello sea razonablemente posible,
                    El {{ env('APP_COMPANY') }} advertirá previamente la terminación o suspensión de la
                    prestación del
                    servicio de Portal y de los demás Servicios.
                </p>
                <h3>12.LEY APLICABLE Y JURISDICCIÓN</h3>
                <p>Estas Condiciones Generales se rigen por la ley de la República de Colombia.</p>
                <p>
                    El {{ env('APP_COMPANY') }} y el Usuario, con renuncia expresa a cualquier otro fuero,
                    se someten al
                    de los
                    Juzgados y Tribunales competentes de la ciudad de Bogotá DC.
                </p>
            </article>
            <!-- END Story -->
        </div>
        <!-- END Page Content -->
        <br>
    </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow">

    </footer>

    <script>
        /* Progress bar */
        //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
        var h = document.documentElement,
            b = document.body,
            st = 'scrollTop',
            sh = 'scrollHeight',
            progress = document.querySelector('#progress'),
            scroll;
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");

        document.addEventListener('scroll', function () {

            /*Refresh scroll % width*/
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');

            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");

            }

        });

        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function () {
            document.getElementById("nav-content").classList.toggle("hidden");
        }

        //Toggle mode
        const toggle = document.querySelector('.js-change-theme');
        const body = document.querySelector('body');
        const mainContent = document.querySelector('#main-content');
        const titleApp = document.querySelector('#titleApp');
        const yearApp = document.querySelector('#yearApp');
        const titlePost = document.querySelector('#titlePost');
        //const profile = document.getElementById('profile');

        toggle.addEventListener('click', () => {
            if (body.classList.contains('text-gray-700')) {
                toggle.innerHTML = "☀️";
                body.classList.remove('text-gray-700');
                body.classList.remove('bg-gray-100');
                body.classList.add('text-gray-300');
                body.classList.add('bg-gray-900');

                titleApp.classList.remove('text-gray-900');
                titleApp.classList.add('text-gray-300');

                yearApp.classList.remove('text-gray-900');
                yearApp.classList.add('text-gray-300');

                titlePost.classList.remove('text-gray-900');
                titlePost.classList.add('text-gray-300');

                mainContent.classList.remove('text-gray-800');
                mainContent.classList.add('text-gray-300');

                header.classList.remove("text-gray-900");
                header.classList.add("text-gray-300");
                header.classList.add("bg-gray-900");
            } else {
                toggle.innerHTML = "🌙";
                body.classList.remove('text-gray-300');
                body.classList.remove('bg-gray-900');
                body.classList.add('text-gray-700');
                body.classList.add('bg-gray-100');

                titleApp.classList.add('text-gray-900');
                titleApp.classList.remove('text-gray-300');

                yearApp.classList.add('text-gray-900');
                yearApp.classList.remove('text-gray-300');

                titlePost.classList.add('text-gray-900');
                titlePost.classList.remove('text-gray-300');

                mainContent.classList.add('text-gray-800');
                mainContent.classList.remove('text-gray-300');

                header.classList.add("text-gray-900");
                header.classList.remove("text-gray-300");
                header.classList.remove("bg-gray-900");
            }
        });

    </script>

</body>

</html>
