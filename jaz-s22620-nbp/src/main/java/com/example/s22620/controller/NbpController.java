package com.example.s22620.controller;

import com.example.s22620.service.NbpService;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import io.swagger.annotations.ApiResponse;
import io.swagger.annotations.ApiResponses;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class NbpController {
    private final NbpService nbpService;

    public NbpController(NbpService nbpService) {
        this.nbpService = nbpService;
    }

    @ApiResponses(value = {
            @ApiResponse(code = 200, message = "OK"),
            @ApiResponse(code = 404, message = "Given currency was not found"),
            @ApiResponse(code = 504, message = "Something wrong with server"),
            @ApiResponse(code = 402, message = "You dont have access"),
            @ApiResponse(code = 403, message = "It is not for you"),
    }
    )
    @ApiOperation(value = "Get average exchange rate of currency from desired date range", notes = "Enter date range and currency code")
    @GetMapping("/nbp/{currency}/{startDate}/{endDate}")
    public ResponseEntity<Double> getAvgCurrency(@ApiParam(value = "Currency code", example = "pln") @PathVariable String currency,
                                                 @ApiParam(value = "start date of range", example = "2001-09-11")@PathVariable String startDate,
                                                 @ApiParam(value = "end date of range", example = "2001-09-12") @PathVariable String endDate) {
        return ResponseEntity.ok(nbpService.getAvgCurrency(currency, startDate, endDate));
    }
    @GetMapping("/nbp/all")
    public ResponseEntity<StringBuilder> getAll(){
        nbpService.getAll();
        return ResponseEntity.ok(nbpService.getAll());
    }

    @GetMapping("/nbp/{currency}/{amount}")
    public ResponseEntity<Double> getExchangeAmount(@PathVariable String currency,@PathVariable Double amount){
        return ResponseEntity.ok(nbpService.countExchangeAmount(currency,amount));
    }

}
