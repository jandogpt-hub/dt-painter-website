/**
 * Contact Form Handler
 * Handles AJAX form submission with validation and user feedback
 */
document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');

    if (!contactForm) return;

    const formSuccess = document.getElementById('formSuccess');
    const formError = document.getElementById('formError');

    /**
     * Handle form submission
     * @param {Event} e - Form submission event
     */
    contactForm.addEventListener('submit', async function (e) {
        e.preventDefault();

        // Hide previous messages
        formSuccess.classList.add('hidden');
        formError.classList.add('hidden');

        // Get form data
        const formData = new FormData(contactForm);

        // Disable submit button
        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'SENDING...';

        try {
            // Submit form
            const response = await fetch('process-contact', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                // Show success message
                formSuccess.classList.remove('hidden');

                // Reset form
                contactForm.reset();

                // Scroll to success message
                formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Redirect to thank you page for conversion tracking
                setTimeout(() => {
                    window.location.href = '/thank-you.php';
                }, 1500);
            } else {
                // Show error message
                formError.classList.remove('hidden');

                // If there are specific errors, display them
                if (result.errors && result.errors.length > 0) {
                    const errorList = result.errors.join('<br>');
                    formError.innerHTML = `<p class="text-red-400 font-bold">⚠ ${errorList}</p>`;
                }

                // Scroll to error message
                formError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        } catch (error) {
            console.error('Form submission error:', error);
            formError.classList.remove('hidden');
            formError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } finally {
            // Re-enable submit button
            submitButton.disabled = false;
            submitButton.textContent = originalButtonText;
        }
    });

    /**
     * Phone number formatting
     * Automatically formats phone number as user types
     */
    const phoneInput = document.getElementById('phone');

    if (phoneInput) {
        phoneInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');

            if (value.length > 10) {
                value = value.slice(0, 10);
            }

            if (value.length >= 6) {
                e.target.value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6)}`;
            } else if (value.length >= 3) {
                e.target.value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
            } else {
                e.target.value = value;
            }
        });
    }

    /**
     * Real-time field validation
     * Provides user feedback as they fill out the form
     */
    const emailInput = document.getElementById('email');

    if (emailInput) {
        emailInput.addEventListener('blur', function () {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (this.value && !emailPattern.test(this.value)) {
                this.classList.add('border-red-500');
                this.classList.remove('border-white/10');
            } else {
                this.classList.remove('border-red-500');
                this.classList.add('border-white/10');
            }
        });
    }
});
