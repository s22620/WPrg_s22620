package com.example.s22620.config;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.client.RestTemplate;

@Configuration
public class NbpRest {
    @Bean
    public RestTemplate restTemplate(){
        return new RestTemplate();}
}

