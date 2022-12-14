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
                    <button class="js-change-theme focus:outline-none">????</button>
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
                T??rminos,
                condiciones y pol??tica de privacidad</h1>
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
                <h3>1.CONDICIONES GENERALES Y SU ACEPTACI??N </h3>
                <p>
                    Estas condiciones generales (en adelante, las ???Condiciones Generales???) regulan el uso
                    del servicio
                    de portal de Internet
                    <strong>www.{{ env('APP_URL_PORTAL') }}</strong> (en adelante, el ???Portal???) que el
                    <strong>{{ env('APP_COMPANY_LARGE') }} </strong>
                    (en adelante, <strong>???{{ env('APP_COMPANY') }}???</strong>) pone a disposici??n de los
                    usuarios de
                    Internet.
                </p>
                <p>
                    La utilizaci??n del Portal atribuye la condici??n de usuario del Portal (en adelante, el
                    ???Usuario???) y
                    expresa la aceptaci??n plena
                    y sin reservas del Usuario de todas y cada una de las Condiciones Generales en la
                    versi??n publicada
                    por {{ env('APP_COMPANY') }}
                    en el momento mismo en que el Usuario acceda al Portal.
                    En consecuencia, el Usuario debe leer atentamente las Condiciones Generales en cada una
                    de las
                    ocasiones en que se proponga utilizar
                    el Portal.
                </p>
                <p>
                    La utilizaci??n de ciertos servicios ofrecidos a los Usuarios a trav??s del Portal se
                    encuentra
                    sometida a condiciones
                    particulares propias que, seg??n los casos, sustituyen, completan y/o modifican las
                    Condiciones
                    Generales
                    (en adelante, las ???Condiciones Particulares???). Con anterioridad a la utilizaci??n de
                    dichos
                    servicios, por tanto,
                    el Usuario tambi??n ha de leer atentamente las correspondientes Condiciones Particulares.
                </p>
                <p>
                    Asimismo, la utilizaci??n del Servicio se encuentra sometida igualmente a todos los
                    avisos,
                    reglamentos de uso e instrucciones
                    puestos en conocimiento del Usuario por {{ env('APP_COMPANY') }}, que completan lo
                    previsto en estas
                    Condiciones Generales en cuanto no se opongan a ellas.
                </p>
                <h4>1.1.CONDICIONES DE ACCESO Y UTILIZACI??N DEL PORTAL</h4>
                <p>Car??cter gratuito del acceso y utilizaci??n del Portal</p>
                <p>
                    La prestaci??n del servicio de Portal por parte de {{ env('APP_COMPANY') }} es gratuito
                    para la
                    comunidad del {{ env('APP_COMPANY') }}.
                    Los usuarios se deben registar en el sistema con un correo valido de la institucion o
                    acercarse a la
                    oficina mas cercana del
                    {{ env('APP_COMPANY') }} para que un funcionario realice la inscripcion en el sistema.
                </p>
                <h4>1.2.OBLIGACI??N DE HACER UN USO CORRECTO DEL PORTAL Y DE LOS SERVICIOS</h4>
                <p>
                    El Usuario se compromete a utilizar el Portal y los Servicios de conformidad con la ley,
                    estas
                    Condiciones Generales,
                    as?? como con la moral, las buenas costumbres y el orden p??blico.
                </p>
                <p>
                    El Usuario se obliga a abstenerse de utilizar el Portal y los Servicios con fines o
                    efectos
                    il??citos, contrarios a lo establecido en estas
                    Condiciones Generales, lesivos de los derechos e intereses de terceros, o que de
                    cualquier forma
                    puedan da??ar, inutilizar, sobrecargar
                    o deteriorar el Portal y los Servicios o impedir la normal utilizaci??n o disfrute del
                    Portal y de
                    los Servicios por parte de los Usuarios.
                </p>
                <h4>1.3.MEDIOS PARA LA OBTENCI??N DE CONTENIDOS</h4>
                <p>
                    El Usuario deber?? abstenerse de obtener e incluso de intentar obtener informaciones,
                    mensajes,
                    gr??ficos, dibujos, archivos de sonido y/o
                    imagen, fotograf??as, grabaciones, archivos ofimaticos, software y, en general, cualquier
                    clase de
                    material accesibles a trav??s del Portal
                    o de los Servicios (en adelante, los ???Contenidos???) empleando para ello medios o
                    procedimientos
                    distintos de los que, seg??n los casos,
                    se hayan puesto a su disposici??n a este efecto o se hayan indicado a este efecto en las
                    p??ginas web
                    donde se encuentren los Contenidos o,
                    en general, de los que se empleen habitualmente en Internet a este efecto siempre que no
                    entra??en un
                    riesgo de da??o o inutilizaci??n del Portal,
                    de los Servicios y/o de los Contenidos.
                </p>
                <p>
                    El material fotogr??fico utilizado en el Portal son obras protegidas por las normas de
                    derechos de
                    autor y tanto el {{ env('APP_COMPANY') }}
                    como el autor del portal "{{env('APP_CREATOR')}}", tienen los derechos patrimoniales de
                    exhibici??n y
                    puesta disposici??n de estas en el Portal.
                    En todo caso, los Usuarios requerir??n de autorizaci??n previa para el uso de las im??genes
                    almacenadas
                    en el Portal.
                </p>
                <h4>1.4.PROPIEDAD INTELECTUAL</h4>
                <p>
                    Se proh??be la modificaci??n, reproducci??n, publicaci??n o transferencia de cualquier
                    Contenido a otras
                    personas, o su uso para cualquier fin
                    Excepto en la medida en que la ley vigente lo permita, est?? prohibido desensamblar,
                    descompilar,
                    aplicar ingenier??a inversa o intentar por
                    cualquier medio romper la protecci??n del contenido.
                </p>
                <p>
                    Todos los contenidos, elementos e informaci??n de este Sitio incluyendo todo texto,
                    formato,
                    im??genes, m??sica, marcas, logotipos, ense??as,
                    nombres comerciales, sonidos, gr??ficos, videos, animaci??n, formatos y dem??s materiales
                    de este
                    Portal son de propiedad de {{ env('APP_COMPANY') }},
                    sus filiales y afiliadas y controlantes, y aquellos de terceros contratistas,
                    licenciantes o
                    cedentes que corresponda.
                </p>
                <p>
                    Algunos de los Contenidos est??n protegidos por las leyes de derechos de autor y de marca
                    registrada.
                    Cualquier uso no autorizado sobre los
                    Servicios y Contenidos del Portal que viole los derechos de propiedad y de propiedad
                    intelectual
                    de {{ env('APP_COMPANY') }} o de terceros,
                    podr?? implicar el inicio de las acciones legales correspondientes por parte de los
                    titulares de los
                    derechos.
                </p>
                <p>
                    El acceso o uso de este Portal no implicar?? de ninguna manera la concesi??n o negaci??n de
                    cualquier
                    licencia, concesi??n o derecho de uso sobre
                    cualquiera de las marcas, nombres, logotipos, dise??os o Contenidos protegidos por el
                    derecho de
                    propiedad intelectual de {{ env('APP_COMPANY') }}
                    o de cualquier tercero, seg??n corresponda.
                </p>
                <p>
                    No se permite la creaci??n de p??ginas web, sitios de Internet, documentos electr??nicos o
                    programas de
                    computador o aplicaciones inform??ticas de
                    cualquier tipo que contengan hiper-v??nculos o marcas que redirijan al navegante a
                    cualquier
                    Contenido de este Portal, sin la correspondiente autorizaci??n.
                </p>
                <h4>1.5.USO CORRECTO DE LOS CONTENIDOS</h4>
                <p>
                    El Usuario se obliga a usar los Contenidos de forma diligente, correcta y l??cita y, en
                    particular,
                    se compromete a abstenerse de:
                <ol type="a" class="">
                    <li>
                        Utilizar los Contenidos de forma, con fines o efectos contrarios a la ley, a la
                        moral y a las
                        buenas costumbres generalmente aceptadas o al orden p??blico;
                    </li>
                    <li>
                        Reproducir o copiar, distribuir, permitir el acceso del p??blico a trav??s de
                        cualquier modalidad
                        de comunicaci??n p??blica, transformar o
                        modificar los Contenidos, a menos que se cuente con la autorizaci??n del titular de
                        los
                        correspondientes derechos o ello resulte legalmente permitido;
                    </li>
                    <li>
                        Suprimir, eludir o manipular el ???copyright??? y dem??s datos identificativos de los
                        derechos
                        de {{ env('APP_COMPANY') }} o de sus
                        titulares incorporados a los Contenidos, as?? como los dispositivos t??cnicos de
                        protecci??n, las
                        huellas digitales o cualesquiera mecanismos de
                        informaci??n que pudieren contener los Contenidos;
                    </li>
                    <li>
                        Emplear los Contenidos y, en particular, la informaci??n de cualquier clase obtenida
                        a trav??s del
                        Portal o de los Servicios para remitir
                        publicidad, comunicaciones con fines de venta directa o con cualquier otra clase de
                        finalidad
                        comercial, mensajes no solicitados dirigidos a una
                        pluralidad de personas con independencia de su finalidad, as?? como a abstenerse de
                        comercializar
                        o divulgar de cualquier modo dicha informaci??n.
                    </li>
                </ol>
                </p>
                <h4>1.6.INTRODUCCI??N DE HIPERV??NCULOS QUE PERMITAN EL ACCESO A LAS P??GINAS WEB DEL PORTAL Y
                    A LOS
                    SERVICIOS.</h4>
                <p>
                    Los Usuarios y, en general, aquellas personas que se propongan establecer un
                    hiperv??nculo entre su
                    p??gina web y el Portal (en adelante, el ???Hiperv??nculo???)
                    deber??n cumplir las condiciones siguientes:
                <ol type="a" class="">
                    <li>
                        El Hiperv??nculo ??nicamente permitir?? el acceso a las p??ginas web del Portal, pero no
                        podr??
                        reproducirlas de ninguna forma;
                    </li>
                    <li>
                        No se establecer??n Hiperv??nculos con las p??ginas web del Portal distintas de la
                        home-page o
                        p??gina primera del Portal o de los Servicios;
                    </li>
                    <li>
                        No se crear?? un browser ni un border enviroment sobre las p??ginas web del Portal ;
                    </li>
                    <li>
                        No se realizar??n manifestaciones o indicaciones falsas, inexactas o incorrectas
                        sobre las
                        p??ginas web del Portal y los Servicios y, en particular,
                        no se declarar?? ni dar?? a entender que {{ env('APP_COMPANY') }} ha autorizado el
                        Hiperv??nculo o
                        que ha supervisado o asumido de cualquier forma los
                        contenidos o servicios ofrecidos o puestos a disposici??n de la p??gina web en la que
                        se establece
                        el Hiperv??nculo;
                    </li>
                    <li>
                        Excepci??n hecha de aquellos signos que formen parte del mismo Hiperv??nculo, la
                        p??gina web en la
                        que se establezca el Hiperenlace no contendr??
                        ninguna marca, nombre comercial, r??tulo de establecimiento, denominaci??n, logotipo,
                        eslogan u
                        otros signos distintivos pertenecientes a {{ env('APP_COMPANY') }};
                    </li>
                    <li>
                        La p??gina web en la que se establezca el Hiperenlace no contendr?? informaciones o
                        contenidos
                        il??citos, contrarios a la moral y buenas costumbres
                        generalmente aceptadas y al orden p??blico, as?? como tampoco contendr?? contenidos
                        contrarios a
                        cualesquiera derechos de terceros.
                    </li>
                </ol>
                El establecimiento del Hiperv??nculo no implica en ning??n caso la existencia de relaciones
                entre {{ env('APP_COMPANY') }} y el propietario de la p??gina web en la
                que se establezca, ni la aceptaci??n y aprobaci??n por parte de {{ env('APP_COMPANY_LARGE') }}
                de sus
                contenidos o servicios.
                </p>
                <h4>1.7.RESPONSABILIDAD POR DA??OS Y PERJUICIOS</h4>
                <p>
                    El Usuario responder?? de los da??os y perjuicios de toda naturaleza que Proexport pueda
                    sufrir,
                    directa o indirectamente, como consecuencia de incumplimiento de
                    cualquiera de las obligaciones derivadas de las Condiciones Generales o de la ley en
                    relaci??n con la
                    utilizaci??n del Portal.
                </p>
                <h3>2.OBJETO</h3>
                <p>
                    A trav??s del Portal, el {{ env('APP_COMPANY') }} facilita a los Usuarios el acceso y la
                    utilizaci??n
                    de diversos servicios y contenidos puestos a disposici??n
                    de los Usuarios por el {{ env('APP_COMPANY') }} o por terceros usuarios del Portal y/o
                    terceros
                    proveedores de servicios y contenidos (en adelante, los ???Servicios???).
                </p>
                <p>
                    {{ env('APP_COMPANY') }} se reserva el derecho a modificar unilateralmente, en cualquier
                    momento y
                    sin previo aviso, la presentaci??n y configuraci??n del Portal,
                    as?? como los Servicios y las condiciones requeridas para utilizar el Portal y los
                    Servicios.
                </p>
                <h3>3.DATOS DE CAR??CTER PERSONAL</h3>
                <p>
                    Para utilizar algunos de los Servicios, los Usuarios deben proporcionar previamente
                    al {{ env('APP_COMPANY') }} ciertos datos de car??cter personal
                    (en adelante, los ???Datos Personales???). El {{ env('APP_COMPANY') }} tratar??
                    automatizadamente los
                    Datos Personales con las finalidades as?? como bajo las
                    condiciones definidas en su Pol??tica de Protecci??n de Datos.
                </p>
                <h3>4.EMPLEO DE TECNOLOG??A COOKIE</h3>
                <p>
                    El {{ env('APP_COMPANY') }} utiliza cookies cuando un Usuario navega por los sitios y
                    p??ginas web
                    del Portal. Nuestras cookies se asocian ??nicamente con el
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
                    reconozca a los Usuarios registrados despu??s de que ??stos se hayan registrado por
                    primera vez, sin
                    que se tengan que registrarse en cada visita
                    para acceder a las ??reas y servicios reservados exclusivamente a ellos.
                </p>
                <p>
                    El Usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla
                    de la
                    recepci??n de cookies y para impedir la instalaci??n
                    de cookies en su disco duro. Por favor, consulte las instrucciones y manuales de su
                    navegador para
                    ampliar ??sta informaci??n.
                </p>
                <p>
                    Para utilizar el Portal, no resulta necesario que el Usuario permita la instalaci??n de
                    las cookies
                    enviadas por {{ env('APP_COMPANY') }},
                    sin perjuicio de que en tal caso ser?? necesario que el Usuario se registre cada vez que
                    acceda a un
                    servicio que requiera el previo registro.
                </p>
                <p>
                    Estas cookies ser??n utilizadas para algunos Servicios como las Listas de Favoritos, por
                    ello, cuando
                    el Usuario comparta sus Listas
                    cualquier persona que tenga acceso a las pol??ticas de privacidad que se encuentran en
                    este
                    documento.
                </p>
                <h3>5.UTILIZACI??N DEL PORTAL, DE LOS SERVICIOS Y DE LOS CONTENIDOS BAJO EXCLUSIVA
                    RESPONSABILIDAD DEL
                    USUARIO</h3>
                <p>
                    Uso del Portal: el acceso a este significa que usted ha aceptado que el uso que usted
                    har?? de este
                    Portal, de sus Contenidos y la informaci??n contenida
                    en ??ste tendr?? prop??sitos leg??timos y legales, y se har?? en cumplimiento de estos
                    T??RMINOS Y
                    CONDICIONES y de todas y cualesquiera leyes aplicables, en
                    todo caso, bajo su ??nica responsabilidad.
                </p>
                <p>
                    Particular pero no exclusivamente, el uso de este Portal, sus Contenidos y la
                    informaci??n contenida
                    en el Portal se encuentra limitado por lo siguiente:
                    Usted acepta que no usar?? este Portal, sus Contenidos o la informaci??n contenida en
                    ??ste, para:
                <ol type="a" class="">
                    <li>
                        Transmitir a terceros o de cualquier manera publicar informaci??n que es falsa,
                        da??ina, hostil,
                        abusiva, irritante, problem??tica, amenazante,
                        tortuosa, difamatoria, vulgar, obscena, pornogr??fica, infundada, odiosa o
                        perjudicial, o
                        respecto de la cual no se cuenta con las debidas
                        autorizaciones legales o contractuales;
                    </li>
                    <li>
                        Ocasionar da??o a menores de edad o promover o efectuar da??os f??sicos o materiales a
                        cualquier
                        persona o grupo de personas naturales y jur??dicas, o a animales;
                    </li>
                    <li>
                        Utilizar la identidad o la informaci??n personal de personas (naturales o jur??dicas)
                        mencionadas
                        en el Portal, para cualquier prop??sito o finalidad;
                    </li>
                    <li>
                        Transmitir o emitir material que contenga virus inform??ticos o cualquier otro
                        c??digo, programa
                        de computador o aplicaci??n destinada a interrumpir,
                        destruir, restringir o perjudicar la funcionalidad de computadores, programas de
                        computador,
                        sistemas de informaci??n, redes de telecomunicaciones
                        o infraestructura y servicios de terceros; de manera intencionada o sin intenci??n
                        violar o
                        incumplir cualquier ley aplicable nacional, local,
                        estatal o internacional, incluyendo pero sin limitarse a las normas de privacidad y
                        protecci??n
                        de datos;
                    </li>
                    <li>
                        Recolectar, guardar y administrar datos personales sobre personas naturales y
                        jur??dicas sin la
                        correspondiente autorizaci??n y en incumplimiento
                        de las leyes aplicables;
                    </li>
                    <li>
                        Ejecutar, planear, armar, estructurar o realizar pr??cticas o actividades de car??cter
                        criminal;
                    </li>
                    <li>
                        Infringir los derechos de propiedad intelectual de {{ env('APP_COMPANY') }} o de
                        terceros, entre
                        otras conductas lesivas de terceros o de las leyes aplicables.
                    </li>
                </ol>
                </p>
                <h3>6.EXCLUSI??N DE GARANT??AS Y DE RESPONSABILIDAD</h3>
                <h4>6.1.EXCLUSI??N DE GARANT??AS Y DE RESPONSABILIDAD POR EL FUNCIONAMIENTO DEL PORTAL Y DE
                    LOS
                    SERVICIOS</h4>
                <h5>6.1.1.DISPONIBILIDAD Y CONTINUIDAD, UTILIDAD Y FALIBILIDAD</h5>
                <p>
                    El {{ env('APP_COMPANY') }} no garantiza la disponibilidad y continuidad del
                    funcionamiento del
                    Portal y de los Servicios. Cuando ello sea posible, el {{ env('APP_COMPANY') }}
                    advertir?? previamente las interrupciones en el funcionamiento del Portal y de los
                    Servicios.
                    El {{ env('APP_COMPANY') }} tampoco garantiza la utilidad
                    del Portal y de los Servicios para la realizaci??n de ninguna actividad en particular, ni
                    su
                    infalibilidad y, en particular, aunque no de modo exclusivo,
                    que los Usuarios puedan efectivamente utilizar el Portal y los Servicios, acceder a las
                    distintas
                    p??ginas web que forman el Portal o a
                    aquellas desde las que se prestan los Servicios.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA FALTA DE DISPONIBILIDAD
                    O DE CONTINUIDAD DEL FUNCIONAMIENTO DEL PORTAL Y DE LOS SERVICIOS, A LA DEFRAUDACI??N DE
                    LA UTILIDAD
                    QUE LOS USUARIOS HUBIEREN PODIDO ATRIBUIR
                    AL PORTAL Y A LOS SERVICIOS, A LA FALIBILIDAD DEL PORTAL Y DE LOS SERVICIOS, Y EN
                    PARTICULAR, AUNQUE
                    NO DE MODO EXCLUSIVO, A LOS FALLOS EN EL ACCESO
                    A LAS DISTINTAS P??GINAS WEB DEL PORTAL O A AQUELLAS DESDE LAS QUE SE PRESTAN LOS
                    SERVICIOS.
                </p>
                <h5>6.1.2.PRIVACIDAD Y SEGURIDAD EN LA UTILIZACI??N DEL PORTAL Y DE LOS SERVICIOS</h5>
                <P>
                    EL {{ env('APP_COMPANY') }} no garantiza la privacidad y seguridad de la utilizaci??n del
                    Portal y de
                    los Servicios y, en particular, no garantiza que terceros
                    no autorizados no puedan tener conocimiento de la clase, condiciones, caracter??sticas y
                    circunstancias del uso que los Usuarios hacen del Portal y de los Servicios.
                </P>
                <P>
                    EL {{ env('APP_COMPANY') }} EXCLUYE TODA RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS DE
                    TODA
                    NATURALEZA QUE PUDIERAN DEBERSE AL CONOCIMIENTO QUE PUEDAN TENER TERCEROS
                    NO AUTORIZADOS DE LA CLASE, CONDICIONES, CARACTER??STICAS Y CIRCUNSTANCIAS DEL USO QUE
                    LOS USUARIOS
                    HACEN DEL PORTAL Y DE LOS SERVICIOS.
                </P>
                <h5>6.1.3.EXCLUSI??N DE GARANT??AS Y DE RESPONSABILIDAD POR LOS CONTENIDOS</h5>
                <H6>6.1.3.1.CALIDAD</H6>
                <p>
                    EL {{ env('APP_COMPANY') }} no controla ni garantiza la ausencia de virus ni de otros
                    elementos en
                    los Contenidos que puedan producir alteraciones en su
                    sistema inform??tico (software y hardware) o en los documentos electr??nicos y ficheros
                    almacenados en
                    su sistema inform??tico.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA PRESENCIA
                    DE VIRUS O A LA PRESENCIA DE OTROS ELEMENTOS EN LOS CONTENIDOS QUE PUEDAN PRODUCIR
                    ALTERACIONES EN
                    EL SISTEMA INFORM??TICO, DOCUMENTOS ELECTRONICOS
                    O FICHEROS DE LOS USUARIOS.
                </p>
                <h5>6.1.4.LICITUD, FIABILIDAD Y UTILIDAD</h5>
                <p>
                    EL {{ env('APP_COMPANY') }} no garantiza la licitud, fiabilidad y utilidad de los
                    Contenidos.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA TRANSMISI??N, DIFUSI??N,
                    ALMACENAMIENTO, PUESTA A DISPOSICI??N, RECEPCI??N, OBTENCI??N O ACCESO A LOS CONTENIDOS, Y
                    EN
                    PARTICULAR, AUNQUE NO DE MODO EXCLUSIVO, POR LOS DA??OS Y
                    PERJUICIOS QUE PUEDAN DEBERSE A:
                <ol type="A" class="">
                    <li>
                        EL INCUMPLIMIENTO DE LA LEY, LA MORAL Y LAS BUENAS COSTUMBRES GENERALMENTE ACEPTADAS
                        O EL ORDEN
                        P??BLICO COMO CONSECUENCIA DE LA TRANSMISI??N, DIFUSI??N,
                        ALMACENAMIENTO, PUESTA A DISPOSICI??N, RECEPCI??N, OBTENCI??N O ACCESO A LOS
                        CONTENIDOS;
                    </li>
                    <li>
                        LA INFRACCI??N DE LOS DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL, DE LOS SECRETOS
                        EMPRESARIALES, DE COMPROMISOS CONTRACTUALES DE CUALQUIER CLASE,
                        DE LOS DERECHOS AL HONOR, A LA INTIMIDAD PERSONAL Y FAMILIAR Y A LA IMAGEN DE LAS
                        PERSONAS, DE
                        LOS DERECHOS DE PROPIEDAD Y DE TODA OTRA NATURALEZA
                        PERTENECIENTES A UN TERCERO COMO CONSECUENCIA DE LA TRANSMISI??N, DIFUSI??N,
                        ALMACENAMIENTO,
                        PUESTA A DISPOSICI??N, RECEPCI??N, OBTENCI??N O ACCESO A LOS CONTENIDOS;
                    </li>
                    <li>
                        LA REALIZACI??N DE ACTOS DE COMPETENCIA DESLEAL Y PUBLICIDAD IL??CITA COMO
                        CONSECUENCIA DE LA
                        TRANSMISI??N, DIFUSI??N, ALMACENAMIENTO,
                        PUESTA A DISPOSICI??N, RECEPCI??N, OBTENCI??N O ACCESO A LOS CONTENIDOS;
                    </li>
                    <li>
                        LA FALTA DE VERACIDAD, EXACTITUD, EXHAUSTIVIDAD, PERTINENCIA Y/O ACTUALIDAD DE LOS
                        CONTENIDOS;
                    </li>
                    <li>
                        LA INADECUACI??N PARA CUALQUIER CLASE DE PROP??SITO DE Y LA DEFRAUDACI??N DE LAS
                        EXPECTATIVAS
                        GENERADAS POR LOS CONTENIDOS;
                    </li>
                    <li>
                        EL INCUMPLIMIENTO, RETRASO EN EL CUMPLIMIENTO, CUMPLIMIENTO DEFECTUOSO O TERMINACI??N
                        POR
                        CUALQUIER CAUSA DE LAS OBLIGACIONES CONTRA??DAS
                        POR TERCEROS Y CONTRATOS REALIZADOS CON TERCEROS A TRAV??S DE O CON MOTIVO DEL ACCESO
                        A LOS
                        CONTENIDOS;
                    </li>
                    <li>
                        LOS VICIOS Y DEFECTOS DE TODA CLASE DE LOS CONTENIDOS TRANSMITIDOS, DIFUNDIDOS,
                        ALMACENADOS,
                        PUESTOS A DISPOSICI??N O DE OTRA FORMA
                        TRANSMITIDOS O PUESTOS A DISPOSICI??N, RECIBIDOS, OBTENIDOS O A LOS QUE SE HAYA
                        ACCEDIDO A TRAV??S
                        DEL PORTAL O DE LOS SERVICIOS.
                    </li>
                </ol>
                </p>
                <h5>6.1.5.EXCLUSI??N DE GARANT??AS Y DE RESPONSABILIDAD POR LOS SERVICIOS PRESTADOS POR
                    TERCEROS A TRAV??S
                    DEL PORTAL</h5>
                <h6>6.1.5.1.CALIDAD</h6>
                <p>
                    EL {{ env('APP_COMPANY') }} no controla ni garantiza la ausencia de virus ni de otros
                    elementos en
                    los servicios prestados por terceros
                    a trav??s del Portal que puedan producir alteraciones en su sistema inform??tico (software
                    y hardware)
                    o en los documentos electr??nicos y ficheros
                    almacenados en su sistema inform??tico.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LA PRESENCIA
                    DE VIRUS O A LA PRESENCIA DE OTROS ELEMENTOS LESIVOS EN LOS SERVICIOS PRESTADOS POR
                    TERCEROS A
                    TRAV??S DEL PORTAL QUE PUEDAN PRODUCIR ALTERACIONES
                    EN EL SISTEMA INFORM??TICO, DOCUMENTOS ELECTRONICOS O FICHEROS DE LOS USUARIOS.
                </p>
                <h6>6.1.5.2.LICITUD, FIABILIDAD Y UTILIDAD</h6>
                <p>
                    El {{ env('APP_COMPANY') }} no garantiza la licitud, fiabilidad y utilidad de los
                    servicios
                    prestados por terceros a trav??s del Portal.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUEDAN DEBERSE A LOS
                    SERVICIOS PRESTADOS POR TERCEROS A TRAV??S DEL PORTAL, Y EN PARTICULAR, AUNQUE NO DE MODO
                    EXCLUSIVO,
                    POR LOS DA??OS Y PERJUICIOS QUE PUEDAN DEBERSE A
                <ol type="A" class="">
                    <li>
                        EL INCUMPLIMIENTO DE LA LEY, LA MORAL Y LAS BUENAS COSTUMBRES GENERALMENTE ACEPTADAS
                        O EL ORDEN
                        P??BLICO COMO CONSECUENCIA DE LA
                        PRESTACI??N DE SERVICIOS POR TERCEROS A TRAV??S DEL PORTAL;
                    </li>
                    <li>
                        LA INFRACCI??N DE LOS DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL, DE LOS SECRETOS
                        EMPRESARIALES, DE COMPROMISOS CONTRACTUALES DE CUALQUIER
                        CLASE, DE LOS DERECHOS AL HONOR, A LA INTIMIDAD PERSONAL Y FAMILIAR Y A LA IMAGEN DE
                        LAS
                        PERSONAS, DE LOS DERECHOS DE PROPIEDAD Y DE TODA
                        OTRA NATURALEZA PERTENECIENTES A UN TERCERO COMO CONSECUENCIA DE LA PRESTACI??N DE
                        SERVICIOS POR
                        TERCEROS A TRAV??S DEL PORTAL;
                    </li>
                    <li>
                        LA REALIZACI??N DE ACTOS DE COMPETENCIA DESLEAL Y PUBLICIDAD IL??CITA COMO
                        CONSECUENCIA DE LA
                        PRESTACI??N DE SERVICIOS POR TERCEROS A TRAV??S DEL PORTAL;
                    </li>
                    <li>
                        LA FALTA DE VERACIDAD, EXACTITUD, EXHAUSTIVIDAD, PERTINENCIA Y/O ACTUALIDAD DE LOS
                        CONTENIDOS
                        TRANSMITIDOS, DIFUNDIDOS, ALMACENADOS, RECIBIDOS,
                        OBTENIDOS, PUESTOS A DISPOSICI??N O ACCESIBLES MEDIANTE LOS SERVICIOS PRESTADOS POR
                        TERCEROS A
                        TRAV??S DEL PORTAL;
                    </li>
                    <li>
                        LA INADECUACI??N PARA CUALQUIER CLASE DE PROP??SITO DE Y LA DEFRAUDACI??N DE LAS
                        EXPECTATIVAS
                        GENERADAS POR LOS SERVICIOS PRESTADOS
                        POR TERCEROS A TRAV??S DEL PORTAL;
                    </li>
                    <li>
                        EL INCUMPLIMIENTO, RETRASO EN EL CUMPLIMIENTO, CUMPLIMIENTO DEFECTUOSO O TERMINACI??N
                        POR
                        CUALQUIER CAUSA DE LAS OBLIGACIONES CONTRA??DAS POR TERCEROS
                        Y CONTRATOS REALIZADOS CON TERCEROS EN RELACI??N CON O CON MOTIVO DE LA PRESTACI??N DE
                        SERVICIOS A
                        TRAV??S DEL PORTAL;
                    </li>
                    <li>
                        LOS VICIOS Y DEFECTOS DE TODA CLASE DE LOS SERVICIOS PRESTADOS POR TERCEROS A TRAV??S
                        DEL PORTAL.
                    </li>
                </ol>
                </p>
                <h5>6.1.6.EXCLUSI??N DE GARANT??AS Y DE RESPONSABILIDAD POR LOS SERVICIOS Y CONTENIDOS
                    ALOJADOS FUERA DEL
                    PORTAL</h5>
                <p>
                    El Portal pone a disposici??n de los Usuarios dispositivos t??cnicos de enlace (tales
                    como, entre
                    otros, links, banners, botones), directorios y herramientas
                    de b??squeda que permiten a los Usuarios acceder a sitios web pertenecientes a y/o
                    gestionados por
                    terceros (en adelante, ???Sitios Enlazados???).
                    La instalaci??n de estos enlaces, directorios y herramientas de b??squeda en el Portal
                    tiene por ??nico
                    objeto facilitar a los Usuarios la b??squeda de y acceso
                    a la informaci??n disponible en Internet.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} no ofrece ni comercializa por s?? ni por medio de tercero los
                    productos y
                    servicios disponibles en los Sitios Enlazados.
                    El {{ env('APP_COMPANY') }} tampoco controla previamente, aprueba, vigila ni hace
                    propios los
                    productos, y servicios, contenidos, informaci??n, datos, archivos,
                    productos y cualquier clase de material existente en los Sitios Enlazados. El Usuario,
                    por tanto,
                    debe extremar la prudencia en la valoraci??n y utilizaci??n
                    de los servicios, informaci??n, datos, archivos, productos y cualquier clase de material
                    existente en
                    los Sitios Enlazados
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} NO GARANTIZA NI ASUME NING??N TIPO DE RESPONSABILIDAD POR LOS
                    DA??OS Y
                    PERJUICIOS DE TODA CLASE QUE PUEDAN DEBERSE A
                <ol type="A" class="">
                    <li>
                        EL FUNCIONAMIENTO, DISPONIBILIDAD, ACCESIBILIDAD O CONTINUIDAD DE LOS SITIOS
                        ENLAZADOS;
                    </li>
                    <li>
                        EL MANTENIMIENTO DE LOS SERVICIOS, CONTENIDOS, INFORMACI??N, DATOS, ARCHIVOS,
                        PRODUCTOS Y
                        CUALQUIER CLASE DE
                        MATERIAL EXISTENTE EN LOS SITIOS ENLAZADOS;
                    </li>
                    <li>
                        LA PRESTACI??N O TRANSMISI??N DE LOS SERVICIOS, CONTENIDOS, INFORMACI??N, DATOS,
                        ARCHIVOS,
                        PRODUCTOS Y CUALQUIER
                        CLASE DE MATERIAL EXISTENTE EN LOS SITIOS ENLAZADOS;
                    </li>
                    <li>
                        LA CALIDAD, LICITUD, FIABILIDAD Y UTILIDAD DE LOS SERVICIOS, CONTENIDOS,
                        INFORMACI??N, DATOS,
                        ARCHIVOS, PRODUCTOS Y CUALQUIER CLASE DE MATERIAL
                        EXISTENTE EN LOS SITIOS ENLAZADOS, EN LOS MISMOS T??RMINOS Y CON EL MISMO ALCANCE
                        DISPUESTO EN LA
                        CONDICI??N GENERAL 0 Y 0 RESPECTO DE LOS
                        CONTENIDOS Y DE LOS SERVICIOS PRESTADOS POR TERCEROS A TRAV??S DEL PORTAL.
                    </li>
                </ol>
                </p>
                <h5>6.1.7.EXCLUSI??N DE GARANT??AS Y DE RESPONSABILIDAD POR LA UTILIZACI??N DEL PORTAL, DE LOS
                    SERVICIOS Y
                    DE LOS CONTENIDOS POR LOS USUARIOS</h5>
                <p>
                    El {{ env('APP_COMPANY') }} no tiene obligaci??n de y no controla la utilizaci??n que los
                    Usuarios
                    hacen del Portal, de los Servicios y de los Contenidos.
                    En particular, el {{ env('APP_COMPANY') }} no garantiza que los Usuarios utilicen el
                    Portal, los
                    Servicios y los Contenidos de conformidad con estas Condiciones
                    Generales y, en su caso, las Condiciones Particulares que resulten de aplicaci??n, ni que
                    lo hagan de
                    forma diligente y prudente.
                </p>
                <p>
                    El {{ env('APP_COMPANY') }} tampoco tiene la obligaci??n de verificar y no verifica la
                    identidad de
                    los Usuarios, ni la veracidad, vigencia, exhaustividad y/o
                    autenticidad de los datos que los Usuarios proporcionan sobre s?? mismos a otros
                    Usuarios.
                </p>
                <p>
                    EL {{ env('APP_COMPANY') }} EXCLUYE CUALQUIER RESPONSABILIDAD POR LOS DA??OS Y PERJUICIOS
                    DE TODA
                    NATURALEZA QUE PUDIERAN DEBERSE A LA UTILIZACI??N DE LOS SERVICIOS
                    Y DE LOS CONTENIDOS POR PARTE DE LOS USUARIOS O QUE PUEDAN DEBERSE A LA FALTA DE
                    VERACIDAD,
                    VIGENCIA, EXHAUSTIVIDAD Y/O AUTENTICIDAD DE LA INFORMACI??N
                    QUE LOS USUARIOS PROPORCIONAN A OTROS USUARIOS ACERCA DE S?? MISMOS Y, EN PARTICULAR,
                    AUNQUE NO DE
                    FORMA EXCLUSIVA, POR LOS DA??OS Y PERJUICIOS DE TODA NATURALEZA
                    QUE PUEDAN DEBERSE A LA SUPLANTACI??N DE LA PERSONALIDAD DE UN TERCERO EFECTUADA POR UN
                    USUARIO EN
                    CUALQUIER CLASE DE COMUNICACI??N REALIZADA A TRAV??S DEL PORTAL.
                </p>
                <h3>7.NO LICENCIA</h3>
                <p>
                    EL {{ env('APP_COMPANY') }} no concede ninguna licencia o autorizaci??n de uso de ninguna
                    clase sobre
                    sus derechos de propiedad industrial
                    e intelectual o sobre cualquier otra propiedad o derecho relacionado con el Portal, los
                    Servicios o
                    los Contenidos.
                </p>
                <h3>8.DENEGACI??N Y RETIRADA DEL ACCESO AL PORTAL Y/O A LOS SERVICIOS</h3>
                <p>
                    EL {{ env('APP_COMPANY') }} se reserva el derecho a denegar o retirar el acceso al
                    Portal y/o a los
                    Servicios, en cualquier
                    momento y sin necesidad de preaviso a aquellos Usuarios que incumplan estas Condiciones
                    Generales o
                    las Condiciones Particulares que resulten de aplicaci??n.
                </p>
                <h3>9.PROCEDIMIENTO EN CASO DE VIOLACI??N DE DERECHOS DE PROPIEDAD INTELECTUAL</h3>
                <p>
                    En el caso de que cualquier Usuario o un tercero considere que cualquiera de los
                    Contenidos ha sido
                    introducido en el Portal con violaci??n
                    de sus derechos de propiedad intelectual deber?? enviar una notificaci??n a
                    el {{ env('APP_COMPANY') }} en la que se contengan los siguientes extremos:
                <ol type="A" class="">
                    <li>Datos personales: nombre, direcci??n, n??mero de tel??fono y direcci??n de correo
                        electr??nico del
                        reclamante;
                    </li>
                    <li>
                        Firma aut??ntica o equivalente, con los datos personales del titular de los derechos
                        de propiedad
                        intelectual
                        supuestamente infringidos o de la persona autorizada para actuar en nombre y por
                        cuenta del
                        titular de los
                        derechos de propiedad intelectual supuestamente infringidos;
                    </li>
                    <li>
                        Indicaci??n precisa y completa de los Contenidos protegidos mediante los derechos de
                        propiedad
                        intelectual supuestamente infringidos,
                        as?? como de su localizaci??n en el Portal;
                    </li>
                    <li>
                        Declaraci??n expresa y clara de que la utilizaci??n de los Contenidos indicados se ha
                        realizado
                        sin el consentimiento del titular de los
                        derechos de propiedad intelectual supuestamente infringidos;
                    </li>
                    <li>
                        Declaraci??n expresa, clara y bajo la responsabilidad del reclamante de que la
                        informaci??n
                        proporcionada en la notificaci??n es exacta
                        y de que la utilizaci??n de los contenidos constituye una violaci??n de sus derechos
                        de propiedad
                        intelectual.
                    </li>
                </ol>
                </p>
                <h3>10.DURACI??N Y TERMINACI??N</h3>
                <p>
                    La prestaci??n del servicio de Portal y de los dem??s Servicios tiene, en principio, una
                    duraci??n
                    indefinida. El {{ env('APP_COMPANY') }}, no obstante,
                    est?? autorizada para dar por terminada o suspender la prestaci??n del servicio del Portal
                    y/o de
                    cualquiera de los Servicios en cualquier momento, sin
                    perjuicio de lo que se hubiere dispuesto al respecto en las correspondientes Condiciones
                    Particulares. Cuando ello sea razonablemente posible,
                    El {{ env('APP_COMPANY') }} advertir?? previamente la terminaci??n o suspensi??n de la
                    prestaci??n del
                    servicio de Portal y de los dem??s Servicios.
                </p>
                <h3>12.LEY APLICABLE Y JURISDICCI??N</h3>
                <p>Estas Condiciones Generales se rigen por la ley de la Rep??blica de Colombia.</p>
                <p>
                    El {{ env('APP_COMPANY') }} y el Usuario, con renuncia expresa a cualquier otro fuero,
                    se someten al
                    de los
                    Juzgados y Tribunales competentes de la ciudad de Bogot?? DC.
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
                toggle.innerHTML = "??????";
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
                toggle.innerHTML = "????";
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
