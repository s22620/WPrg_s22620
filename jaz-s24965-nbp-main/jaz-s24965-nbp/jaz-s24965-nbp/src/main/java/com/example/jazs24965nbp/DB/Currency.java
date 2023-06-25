package com.example.jazs24965nbp.DB;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

import java.sql.Timestamp;

@Entity
public class Currency {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;


    private String currency;


    private Timestamp startDate;

    private Timestamp endDate;


    private double average;


    private Timestamp addedAt;

    public Currency(){

    }
    public Currency(Long id, String currency, Timestamp startDate, Timestamp endDate, double average, Timestamp addedAt) {
        this.id = id;
        this.currency = currency;
        this.startDate = startDate;
        this.endDate = endDate;
        this.average = average;
        this.addedAt = addedAt;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public void setCurrency(String currency) {
        this.currency = currency;
    }

    public void setStartDate(Timestamp startDate) {
        this.startDate = startDate;
    }

    public void setEndDate(Timestamp endDate) {
        this.endDate = endDate;
    }

    public void setAverage(double average) {
        this.average = average;
    }

    public void setAddedAt(Timestamp addedAt) {
        this.addedAt = addedAt;
    }

    public Long getId() {
        return id;
    }

    public String getCurrency() {
        return currency;
    }

    public Timestamp getStartDate() {
        return startDate;
    }

    public Timestamp getEndDate() {
        return endDate;
    }

    public double getAverage() {
        return average;
    }

    public Timestamp getAddedAt() {
        return addedAt;
    }
}
