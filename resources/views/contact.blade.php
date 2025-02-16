@include('components.header', ['activeTab' => 'Home'])
<div class="bg-dark py-5 px-4 text-white">
    <div class="container mt-5">
        <!-- Contact Section -->
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <p>We would love to hear from you! Please reach out to us using the form below.</p>

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <div class="col-md-6">
                <h2>Our Contact Information</h2>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> support@example.com</li>
                    <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                    <li><strong>Address:</strong> 1234 Example St., City, Country</li>
                    <li><strong>Working Hours:</strong> Monday to Friday, 9 AM - 6 PM</li>
                </ul>
                <div class="embed-responsive embed-responsive-16by9 mt-3">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAP_URL"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h2>Frequently Asked Questions</h2>
                <div class=" accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                What is your return policy?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faqOne"
                            data-bs-parent="#faqAccordion">
                            <div class="text-black-50 accordion-body">
                                Our return policy allows you to return items within 30 days of purchase. Please refer to
                                our Return Policy page for more details.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                How can I track my order?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="text-black-50 accordion-body">
                                Once your order is shipped, you will receive an email with a tracking number. You can
                                track your order by visiting our Order Tracking page.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faqThree"
                            data-bs-parent="#faqAccordion">
                            <div class="text-black-50 accordion-body">
                                We accept all major credit cards, PayPal, and bank transfers. Please visit our Payment
                                Methods page for more information.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include('components.footer')