package com.example.jazs22620nbp.Config;

import io.swagger.v3.oas.models.OpenAPI;
import io.swagger.v3.oas.models.info.Contact;
import io.swagger.v3.oas.models.info.Info;
import io.swagger.v3.oas.models.info.License;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class SwaggerConfig {


    @Bean
    public OpenAPI myOpenAPI(){
        Contact contact = new Contact();
        contact.setEmail("a.stankiewicz@pjwstk.edu.pl");
        contact.setName("PJATK");
        contact.setUrl("https://www.pjatk-gdansk.com");

        License mitLicense = new License().name("MIT License").url("https://choosealicense.com/licenses/mit/");

        Info info = new Info().title("Movie Service Rest API")
                .version("1.0")
                .contact(contact)
                .description("This API exposes endpoints to manage MovieService")
                .license(mitLicense);

        return new OpenAPI().info(info);

    }
}
