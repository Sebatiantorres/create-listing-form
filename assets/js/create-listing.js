const TrestiqFormSteps = {
    currentStep: 1,
    totalSteps: 4,
    categories: [],

    loadTaxonomyCategories: async function() {
        try {
            const response = await $.get('/wp-content/themes/blocksy-child/trestiq-auth/includes/TrestiqCore/Listings/taxonomy.php', {
                action: 'get_categories'
            });
            if (response.success) {
                this.categories = response.data;
            }
        } catch (error) {
            console.error('Error cargando categorías:', error);
        }
    },

    // Resto del código JavaScript...
    // Copiar todo el contenido del objeto TrestiqFormSteps aquí
};

// Inicialización cuando el documento está listo
$(document).ready(function() {
    TrestiqFormSteps.init();
}); 