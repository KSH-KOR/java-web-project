package com.example;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {
    //root address's annotation.
    // when root is requested then the following function is executed automatically.
    @RequestMapping("/")
    public String index(){
        System.out.println("request index");

        //we need to call jsp. (call views)
        // the simplest way is just calling views name
        // use predefined prefix and suffix in dispatcher xml file
        return "index";
    }
}
