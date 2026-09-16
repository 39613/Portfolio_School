<?php get_header(); ?>
<main class="container">
    <section class="page-intro">
        <p class="eyebrow">Laten we praten</p>
        <h1>Contact</h1>
        <p class="lead">Heb je een vraag, een idee of wil je samenwerken? Stuur gerust een bericht.</p>
    </section>
    <section class="contact-layout">
        <div class="contact-details">
            <h2>Neem contact op</h2>
            <p>Ik hoor graag wat je in gedachten hebt. Je kunt me rechtstreeks mailen of het formulier gebruiken.</p>
            <p><a href="mailto:hello@example.com">hello@example.com</a></p>
            <p>Amsterdam · Nederland</p>
        </div>
        <form class="contact-form" action="#" method="post">
            <label for="contact-name">Naam</label>
            <input id="contact-name" name="name" type="text" autocomplete="name" required>
            <label for="contact-email">E-mailadres</label>
            <input id="contact-email" name="email" type="email" autocomplete="email" required>
            <label for="contact-message">Bericht</label>
            <textarea id="contact-message" name="message" required></textarea>
            <button class="button" type="submit">Verstuur bericht</button>
        </form>
    </section>
</main>
<?php get_footer(); ?>
