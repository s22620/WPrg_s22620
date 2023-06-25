package com.example.jazs24965nbp.Service;


import com.example.jazs24965nbp.DB.Currency;
import com.example.jazs24965nbp.DB.CurrencyRepository;
import com.fasterxml.jackson.databind.util.JSONPObject;
import org.springframework.http.HttpMethod;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Service;
import org.springframework.web.client.RestTemplate;

import javax.xml.crypto.Data;
import java.sql.Timestamp;
import java.util.Date;

@Service
public class CurrencyService {

    private final RestTemplate restTemplate;
    private final CurrencyRepository currencyRepository;

    public CurrencyService(RestTemplate restTemplate, CurrencyRepository currencyRepository) {
        this.restTemplate = restTemplate;
        this.currencyRepository = currencyRepository;
    }


    public Currency getAverage(String currency, String startDate, String endDate) {
        String url = "http://api.nbp.pl/api/exchangerates/rates/a/" + currency +"/" + startDate +  "/" + endDate + "/";
        ResponseEntity<Currency> response = restTemplate.exchange(url, HttpMethod.GET,null, Currency.class);
        if (response.getStatusCode() == HttpStatus.OK){
            Currency currency1 = new Currency();
            Date date = new Date();
            Timestamp timestamp = new Timestamp(date.getTime());
            Timestamp sd = Timestamp.valueOf(startDate);
            Timestamp ed = Timestamp.valueOf(endDate);
            currency1.setCurrency(currency);
            currency1.setStartDate(sd);
            currency1.setEndDate(ed);
            currency1.setAddedAt(timestamp);
            return response.getBody();
        }else {
            return null;
        }
    }

}
