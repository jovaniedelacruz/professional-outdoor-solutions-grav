---
title: A Page with an Example Form
cache_enable: false
form:
    name: contact-form
    classes: contact_form
    fields:

      columns:
        type: columns
        classes: contact_form__columns

        fields:
          column1:
            type: column
            classes: contact_form__columns__col contact_form__columns__col--first
            fields:
            - name: name
              label: false
              outerclasses: contact_form__columns__col__name
              id: contact_form__name
              placeholder: Your name
              autofocus: on
              autocomplete: on
              type: text
              validate:
                required: true

            - name: email
              label: false
              label: Email
              outerclasses: contact_form__columns__col__email
              id: contact_form__email
              placeholder: Enter your email address
              type: email
              validate:
                required: true

            - name: phone
              label: false
              label: Phone
              outerclasses: contact_form__columns__col__phone
              id: contact_form__phone
              placeholder: Your phone
              autofocus: on
              autocomplete: on
              type: text
              validate:
                required: true

          column2:
            type: column
            classes: contact_form__columns__col contact_form__columns__col--second
            fields:
            -
              name: message
              label: false
              label: Message
              outerclasses: contact_form__columns__col__message
              id: contact_form__message
              placeholder: Type your message here...
              autofocus: on
              autocomplete: on
              type: textarea
              validate:
                required: true
    buttons:
        submit:
          type: submit
          value: Submit
    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.to }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your feedback!
        - display: thankyou
---

## Let's talk about your project
