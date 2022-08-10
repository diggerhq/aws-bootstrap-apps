FROM amazoncorretto:18

COPY . .
RUN ./mvnw package

COPY . .

EXPOSE 8080
ENTRYPOINT ["java","-jar","/target/demo-0.0.1-SNAPSHOT.jar"]
