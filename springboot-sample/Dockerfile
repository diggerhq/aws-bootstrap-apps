FROM amazoncorretto:18

COPY . .
RUN ./mvnw package

COPY target/demo-0.0.1-SNAPSHOT.jar app.jar

ENTRYPOINT ["java","-jar","/app.jar"]