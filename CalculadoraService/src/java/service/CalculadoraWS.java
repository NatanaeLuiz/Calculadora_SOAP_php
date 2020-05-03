/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;

/**
 *
 * @author natan
 */
@WebService(serviceName = "calculadoraWS")
public class CalculadoraWS {
    
    @WebMethod(operationName = "somar")
    public Integer somar(@WebParam(name = "a") int a, @WebParam(name = "b") int b) {
        return a+b;
    }
    
    @WebMethod(operationName = "subtrair")
    public Integer subtrair(@WebParam(name = "a") int a, @WebParam(name = "b") int b) {
        return a-b;
    }
    
    @WebMethod(operationName = "multiplicar")
    public Integer multiplicar(@WebParam(name = "a") int a, @WebParam(name = "b") int b) {
        return a*b;
    }
    
    @WebMethod(operationName = "dividir")
    public Integer dividir(@WebParam(name = "a") int a, @WebParam(name = "b") int b) {
        return a/b;
    }
}
