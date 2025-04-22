document.addEventListener('DOMContentLoaded', function() {
    const progressDots = document.querySelectorAll('.progress-dot');
    const sections = document.querySelectorAll('.form-section');
    const progressLine = document.querySelector('.progress-line');
    const progressSidebar = document.querySelector('.progress-sidebar');
    
    // Variable para controlar si ya se mostró la barra
    let hasScrolled = false;
    let scrollTimeout;
    
    // Función para actualizar la barra de progreso según la sección activa
    function updateProgressBasedOnSection() {
        // Obtener la sección activa
        let currentSection = '';
        let progressSize = '25%';
        
        // Determinar la sección actual basada en la URL o el estado
        const path = window.location.pathname;
        if (path.includes('metricas')) {
            currentSection = 'metricas';
            progressSize = '50%';
        } else if (path.includes('monetizacion')) {
            currentSection = 'monetizacion';
            progressSize = '75%';
        } else if (path.includes('configuracion')) {
            currentSection = 'configuracion';
            progressSize = '100%';
        } else {
            currentSection = 'inicio';
            progressSize = '25%';
        }
        
        // Actualizar los puntos y la línea de progreso según la sección
        progressDots.forEach((dot, index) => {
            dot.classList.remove('active', 'completed');
            
            switch(currentSection) {
                case 'metricas':
                    if (index === 0) dot.classList.add('completed');
                    if (index === 1) dot.classList.add('active');
                    break;
                    
                case 'monetizacion':
                    if (index <= 1) dot.classList.add('completed');
                    if (index === 2) dot.classList.add('active');
                    break;
                    
                case 'configuracion':
                    if (index <= 2) dot.classList.add('completed');
                    if (index === 3) dot.classList.add('active');
                    break;
                    
                default: // inicio
                    if (index === 0) dot.classList.add('active');
                    break;
            }
        });

        // Aplicar el progreso según el dispositivo
        if (window.innerWidth <= 768) {
            progressLine.style.width = progressSize;
            progressLine.style.height = '100%';
        } else {
            progressLine.style.width = '100%';
            progressLine.style.height = progressSize;
        }
    }
    
    // Función para manejar el scroll con debounce
    function handleScroll() {
        if (window.innerWidth > 768) {
            clearTimeout(scrollTimeout);
            
            scrollTimeout = setTimeout(() => {
                const scrollPosition = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;
                
                // Mostrar la barra cuando se ha scrolleado un poco
                if (scrollPosition > windowHeight * 0.1 && !hasScrolled) {
                    progressSidebar.classList.add('visible');
                    hasScrolled = true;
                } else if (scrollPosition <= windowHeight * 0.1 && hasScrolled) {
                    progressSidebar.classList.remove('visible');
                    hasScrolled = false;
                }
            }, 10);
        }
    }
    
    // Escuchar el evento scroll con passive true para mejor rendimiento
    window.addEventListener('scroll', handleScroll, { passive: true });
    
    // Inicializar el estado de la barra de progreso
    updateProgressBasedOnSection();
    
    // Actualizar cuando cambie la URL
    window.addEventListener('popstate', updateProgressBasedOnSection);
    
    // Actualizar cuando cambie el tamaño de la ventana
    window.addEventListener('resize', () => {
        handleScroll();
        updateProgressBasedOnSection();
    });
    
    // Agregar click handlers para los puntos de progreso
    progressDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const pages = ['index.html', 'metricas.html', 'monetizacion.html', 'configuracion.html'];
            window.location.href = pages[index];
        });
    });
});
