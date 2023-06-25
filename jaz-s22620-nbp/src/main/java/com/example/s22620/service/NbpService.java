package com.example.s22620.service;

import com.example.s22620.model.*;
import com.example.s22620.repository.NbpRepository;
import org.springframework.stereotype.Service;
import org.springframework.web.client.RestTemplate;

import java.util.List;
import java.util.Set;

@Service
public class NbpService {
    private final RestTemplate restTemplate;
//    private final NbpRepository nbpRepository;


    private static final Set<String> tableA = Set.of(
            "THB", "USD", "AUD", "HKD", "CAD", "NZD", "SGD", "EUR", "HUF", "CHF", "GBP", "UAH", "JPY", "CZK", "DKK", "ISK", "NOK", "SEK", "HRK", "RON", "BGN", "TRY", "ILS", "CLP", "PHP", "MXN", "ZAR", "BRL", "MYR", "RUB", "IDR", "INR", "KRW", "CNY", "XDR"
    );
    private static final Set<String> tableB = Set.of(
            "AFN", "MGA", "PAB", "ETB", "VES", "BOB", "CRC", "SVC", "NIO", "GMD", "MKD", "DZD", "BHD", "IQD", "JOD", "KWD", "LYD", "RSD", "TND", "MAD", "AED", "STN", "BSD", "BBD", "BZD", "BND", "FJD", "GYD", "JMD", "LRD", "NAD", "SRD", "TTD", "XCD", "SBD", "ZWL", "VND", "AMD", "CVE", "AWG", "BIF", "XOF", "XAF", "XPF", "DJF", "GNF", "KMF", "CDF", "RWF", "EGP", "GIP", "LBP", "SSP", "SDG", "SYP", "GHS", "HTG", "PYG", "ANG", "PGK", "LAK", "MWK", "ZMW", "AOA", "MMK", "GEL", "MDL", "ALL", "HNL", "SLL", "SZL", "LSL", "AZN", "MZN", "NGN", "ERN", "TWD", "TMT", "MRU", "TOP", "MOP", "ARS", "DOP", "COP", "CUP", "UYU", "BWP", "GTQ", "IRR", "YER", "QAR", "OMR", "SAR", "KHR", "BYN", "LKR", "MVR", "MUR", "NPR", "PKR", "SCR", "PEN", "KGS", "TJS", "UZS", "KES", "SOS", "TZS", "UGX", "BDT", "WST", "KZT", "MNT", "VUV", "BAM"
    );

    public NbpService(RestTemplate restTemplate, NbpRepository nbpRepository) {
        this.restTemplate = restTemplate;
//        this.nbpRepository = nbpRepository;
    }

    public Root getAvgList(String currency, String startData, String endData) {
        String url = String.format("https://api.nbp.pl/api/exchangerates/rates/a/%s/%s/%s/?format=json", currency, startData, endData);
        return restTemplate.getForObject(url, Root.class);
    }

    public double getAvgCurrency(String currency, String startData, String endData) {
        Root root = getAvgList(currency, startData, endData);
        List<Rate> rates = root.getRates();
        double sum = 0;
        for (Rate rat : rates) {
            sum += rat.getMid();
        }
        return sum / rates.size();
    }

    public Root getCurrencyRate(String currency) {
        String url = "";

        if (tableA.contains(currency.toUpperCase())) {
            url = String.format("http://api.nbp.pl/api/exchangerates/rates/a/%s/?format=json", currency);
        } else if (tableB.contains(currency.toUpperCase())) {
            url = String.format("http://api.nbp.pl/api/exchangerates/rates/b/%s/?format=json", currency);
        }
        System.out.println(url);
        return restTemplate.getForObject(url, Root.class);


    }

    public double countExchangeAmount(String currency, double amount) {
        Root root = getCurrencyRate(currency);
        Rate rate = root.getRates().get(0);
        return amount / rate.getMid();
    }
// zabrakło czasu :///
//    public NbpModel getNbpModel(String currency, String beginDate, String endDate) {
//        Instant now = Instant.now();
//        String requestUrl = prepareUrl(currency, beginDate, endDate);
//        ResponseEntity<Rate> response = restTemplate.getForEntity(requestUrl, Rate.class);
//        NbpModel nbpModel = nbpModelFactory.getMeanCurrency(Objects.requireNonNull(response.getBody()),
//                beginDate, endDate, now);
//        return nbpRepository.save(nbpModel);
//    }

    public StringBuilder getAll() {
        String url = "http://api.nbp.pl/api/exchangerates/tables/a/?format=json";
        Root2[] root = restTemplate.getForObject(url, Root2[].class);
        StringBuilder all = new StringBuilder();
        if (root != null) {
            List<Rate2> rates = root[0].getRates();

            for (Rate2 rat : rates) {
                all.append("\"");
                all.append(rat.getCode());
                all.append("\",");
            }

        }
        return all;
    }

}
