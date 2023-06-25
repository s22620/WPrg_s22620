package com.example.jazs22620nbp.Controller;


import com.example.jazs22620nbp.DB.Currency;
import com.example.jazs22620nbp.DB.CurrencyRepository;
import com.example.jazs22620nbp.Service.CurrencyService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpMethod;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping(path = "/average")
public class MainController {

    @Autowired
    private CurrencyRepository currencyRepository;
    private final CurrencyService currencyService;

    public MainController(CurrencyService currencyService) {
        this.currencyService = currencyService;
    }

    @GetMapping(path = "/display/{currency}")
    public ResponseEntity<Currency> getAverage(@PathVariable String currency,@PathVariable String startDate,@PathVariable String endDate){
        return ResponseEntity.ok(currencyService.getAverage(currency,startDate,endDate));
    }

}
