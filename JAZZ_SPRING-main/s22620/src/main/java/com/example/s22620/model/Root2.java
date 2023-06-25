package com.example.s22620.model;

import java.util.List;

public class Root2{
    private String table;
    private String no;
    private String effectiveDate;
    private List<Rate2> rates;


    public String getTable() {
        return table;
    }

    public void setTable(String table) {
        this.table = table;
    }

    public String getNo() {
        return no;
    }

    public void setNo(String no) {
        this.no = no;
    }

    public String getEffectiveDate() {
        return effectiveDate;
    }

    public void setEffectiveDate(String effectiveDate) {
        this.effectiveDate = effectiveDate;
    }

    public List<Rate2> getRates() {
        return rates;
    }

    public void setRates(List<Rate2> rates) {
        this.rates = rates;
    }
}
